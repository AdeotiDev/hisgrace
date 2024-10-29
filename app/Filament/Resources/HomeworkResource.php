<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Faker\Core\File;
use Filament\Tables;
use App\Models\Branch;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Homework;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\SchoolClass;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\HomeworkResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomeworkResource\RelationManagers;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;

class HomeworkResource extends Resource
{
    protected static ?string $model = Homework::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';
    protected static ?string $navigationGroup = 'Examinations';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(3)->schema([
                    Section::make('Details')
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->maxLength(255),
                            Select::make('subject_id')
                                ->options(Subject::all()->pluck('name', 'id'))
                                ->required()
                                ->label('Subject'),
                            Forms\Components\DatePicker::make('due_date')
                                ->required(),
                            Select::make('teacher_id')
                                ->label('Teacher')
                                ->required()
                                ->options(User::whereHas('teacher')->pluck('name', 'id')),
                            Select::make('class_ids')
                                ->label('Classes')
                                ->required()
                                ->options(SchoolClass::all()->pluck('name', 'id'))
                                ->multiple()
                                ,
                            Select::make('branch_ids')
                                ->label('Branches')
                                // ->required()
                                ->options(Branch::all()->pluck('name', 'id'))
                                ->multiple()
                                ,

                        ])->columnSpan(2),

                    Section::make('Metadata')
                        ->schema([
                            RichEditor::make('description')
                                ->required(),
                            FileUpload::make('attachment')
                                ->directory('homework')
                                ->label('Attachment'),
                        ])->columnSpan(1),
                ]),
            ])->columns(3);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('due_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('teacher.name')
                    
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->markdown()
                    ->words(20)
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('class_ids')
                    ->view('tables.columns.classes')
                    ,
                Tables\Columns\TextColumn::make('branch_ids')
                    ->view('tables.columns.branches')
                    ,
                Tables\Columns\TextColumn::make('subject.name')
                    ->label('Subject')
                    ->sortable(),
                Tables\Columns\TextColumn::make('attachment')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->badge()
                    ->searchable(),
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
            'index' => Pages\ListHomework::route('/'),
            'create' => Pages\CreateHomework::route('/create'),
            'edit' => Pages\EditHomework::route('/{record}/edit'),
        ];
    }
}
