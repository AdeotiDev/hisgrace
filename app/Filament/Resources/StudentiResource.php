<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Branch;
use App\Models\Student;
use App\Models\Studenti;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\StudentiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StudentiResource\RelationManagers;

class StudentiResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = "Student";

    public static function form(Form $form): Form
    {

        
        return $form
        ->schema([
            Forms\Components\Section::make('User Details')
            ->schema([
                TextInput::make('name') 
                    ->label('Full Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email') 
                    ->label('Email Address')
                    ->required()
                    ->email()
                    ->visibleOn('create')
                    ->maxLength(255)
                    ->unique(User::class, 'email'),
                 Select::make('branch_id')
                    ->label('Branch')
                    ->options(Branch::all()->pluck('name', 'id'))
                    ->required(),
                TextInput::make('password')
                    ->label('Password')
                    ->dehydrateStateUsing(fn ($state) => bcrypt($state))
                    ->revealable()
                    ->password()
                    ->nullable() // Make it optional
                    ->minLength(8),

                TextInput::make('address') // Correctly reference the user relationship
                    ->label('Address')
                    ->nullable(),

                FileUpload::make('passport') // Correctly reference the user relationship
                    ->label('Passport Photo')
                    ->nullable()
                    ->disk('public')
                    ->columnSpanFull()
                    ->directory('passports'),
            ])->columns(2),


                Forms\Components\Section::make('Student Information')
                    ->relationship('student')
                    ->schema([
                       

                        Select::make('school_class_id')
                            ->relationship('class', 'name')
                            ->required()
                            ->label('Class'),

                        TextInput::make('roll_number')
                            ->label('Registration Number')
                            ->visibleOn('create')
                            ->unique(Student::class, 'roll_number')
                            ->required(),
                        DatePicker::make('admission_date')
                            ->label('Admission Date')
                            ->required(),
                    ])->columns(2),

                    Section::make('Parent Details')
                        ->relationship('student')
                        ->schema([
                            TextInput::make('parent_contact')
                                ->label('Parent Contact')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('guardian_name')
                                ->label('Guardian Name')
                                ->required(),
                            TextInput::make('guardian_phone')
                                ->label('Guardian Phone')
                                ->required(),
                        ])->columns(3),
            ]);
    }

 
    public static function table(Table $table): Table
    {
        return $table
            ->query(
                User::query()
                ->with(['student', 'branch'])
                ->orderBy('id', 'desc')
                ->whereHas('student')
                )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Full Name')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\ImageColumn::make('passport')
                    ->label('Passport Photo')
                    //insert a placeholder image or icon for a student that doesn't have a passport
                    ->circular(),
                
                Tables\Columns\TextColumn::make('student.class.name')
                    ->label('Class')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('student.roll_number')
                    ->label('Registration Number')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('branch.name')
                    ->label('Branch')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created Date')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                // Add filters here if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudentis::route('/'),
            'create' => Pages\CreateStudenti::route('/create'),
            'edit' => Pages\EditStudenti::route('/{record}/edit'),
        ];
    }
}
