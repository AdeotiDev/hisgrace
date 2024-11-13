<?php

namespace App\Filament\Student\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Homework;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\StudentHomework;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Student\Resources\StudentHomeworkResource\Pages;
use App\Filament\Student\Resources\StudentHomeworkResource\RelationManagers;

class StudentHomeworkResource extends Resource
{
    protected static ?string $model = Homework::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';
    protected static ?string $navigationGroup = 'Exams';

    protected static ?string $modelLabel = 'Homework';

    public static function canCreate(): bool
    {
        return false;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }
    // In App\Models\Homework.php
    public function download()
    {
        // Assuming 'attachment' is the file path saved in the model
        if ($this->attachment && \Storage::exists($this->attachment)) {
            return \Storage::download($this->attachment);
        }

        // Optional: throw an exception or handle the case where the file doesn't exist
        throw new \Exception("File not found.");
    }


    public static function table(Table $table): Table
    {
        return $table
            ->query(
                Homework::forStudentClass((string) auth()->user()->student_class)
            )
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
                    ->view('tables.columns.classes'),
                Tables\Columns\TextColumn::make('branch_ids')
                    ->view('tables.columns.branches'),
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
                // Tables\Actions\Action::make('download')
                //     ->action(function (Homework $record) {
                //         $record->download();
                //     })
                //     ->color('success')
                //     ->button(),

                Tables\Actions\Action::make('download')
                ->url(fn (Homework $record) => route('homework.download', $record->id))
                ->openUrlInNewTab()
                ->color('success')
                ->button(),

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
            'index' => Pages\ListStudentHomework::route('/'),
            'create' => Pages\CreateStudentHomework::route('/create'),
            'edit' => Pages\EditStudentHomework::route('/{record}/edit'),
        ];
    }
}
