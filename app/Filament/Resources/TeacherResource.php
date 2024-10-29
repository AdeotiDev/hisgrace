<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Branch;
use App\Models\Teacher;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TeacherResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TeacherResource\RelationManagers;
use App\Models\SchoolClass;
use App\Models\Subject;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\ViewColumn;

class TeacherResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'HRM';
    protected static ?string $modelLabel = "Teacher";

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
                            ->dehydrateStateUsing(fn($state) => bcrypt($state))
                            ->revealable()
                            ->password()
                            ->nullable() // Make it optional
                            ->minLength(8),

                        TextInput::make('address') 
                            ->label('Address')
                            ->nullable(),
                        Toggle::make('is_admin')
                        
                            ->label('Is Admin')
                            ->default(0),

                        FileUpload::make('passport') 
                            ->label('Passport Photo')
                            ->nullable()
                            ->disk('public')
                            ->columnSpanFull()
                            ->directory('passports'),
                    ])->columns(2),


                Section::make('Teacher Details')
                    ->relationship('teacher')
                    ->schema([
                        Forms\Components\TextInput::make('qualification')
                            ->required()
                            ->maxLength(255),
                        Select::make('subject_ids')
                            ->label('Subjects')
                            ->searchable()
                            ->multiple()
                            ->options(Subject::all()->pluck('name', 'id'))
                            ->required(),
                        Select::make('class_ids')
                            ->label('Classes')
                            ->searchable()
                            ->multiple()
                            ->options(SchoolClass::all()->pluck('name', 'id'))
                            ->required(),
                    ])->columns(3)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->query(
            User::query()
            ->with(['student', 'branch'])
            ->orderBy('id', 'desc')
            ->whereHas('teacher')
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('teacher.qualification')
                    ->label("Qualification")
                    ->searchable(),
                ToggleColumn::make('is_admin'),
                 Tables\Columns\ImageColumn::make('passport')
                    ->label('Passport Photo')
                    //insert a placeholder image or icon for a student that doesn't have a passport
                    ->circular(),
                Tables\Columns\TextColumn::make('branch.name')
                    ->searchable(),
                ViewColumn::make('teacher.subject_ids')
                    ->view('tables.columns.subject')
                    ->label('Subjects')
                    ->sortable(),
                

                ViewColumn::make('teacher.class_ids')
                    ->view('tables.columns.classes')
                    ->label('Classes')
                    ->sortable(),
                TextColumn::make('id'),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
}
