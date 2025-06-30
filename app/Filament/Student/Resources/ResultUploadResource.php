<?php

namespace App\Filament\Student\Resources;

use LDAP\Result;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ResultUpload;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Student\Resources\ResultUploadResource\Pages;
use App\Filament\Student\Resources\ResultUploadResource\RelationManagers;
use App\Filament\Student\Resources\ResultUploadResource\Pages\StudentMyViewResult;
use App\Models\ResultRoot;
use Illuminate\Support\Facades\Auth;

class ResultUploadResource extends Resource
{
    protected static ?string $model = ResultRoot::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-on-square-stack';
    protected static ?string $navigationGroup = 'Exams';
    protected static ?string $navigationLabel = 'My Results V';

    public static function getEloquentQuery(): Builder
    {
        $studentId = Auth::id();

        $relevantRootIds = ResultRoot::with('resultUploads')
            ->get()
            ->filter(function ($resultRoot) use ($studentId) {
                return $resultRoot->resultUploads->contains(function ($upload) use ($studentId) {
                    $items = is_array($upload->card_items)
                        ? $upload->card_items
                        : json_decode($upload->card_items, true);

                    return is_array($items) && array_key_exists((string) $studentId, $items);
                });
            })
            ->pluck('id');


        return parent::getEloquentQuery()
            ->whereIn('id', $relevantRootIds);
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function canCreate(): bool
    {
        return false;
    }


    public static function table(Table $table): Table
    {




        return $table
            // ->query(
            //     ResultUpload::whereRaw("JSON_UNQUOTE(JSON_EXTRACT(card_items, '$.\"$loggedInStudentId\"')) IS NOT NULL")
            // )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Result Root')
                    ->numeric()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('class.name')
                //     ->label('Class')
                //     ->numeric()
                //     ->sortable(),
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
                Tables\Actions\Action::make('view')
                    ->label('View Result')
                    ->icon('heroicon-o-eye')
                    ->action(fn(ResultRoot $record) => redirect()->route('filament.student.resources.result-uploads.view-results', ['record' => $record->id])),
            ])
            // ->bulkActions([
            //     Tables\Actions\BulkActionGroup::make([
            //         Tables\Actions\DeleteBulkAction::make(),
            //     ]),
            // ])
        ;
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
            'index' => Pages\ListResultUploads::route('/'),
            'view-results' => StudentMyViewResult::route('/{record}/view-results'),
            // 'create' => Pages\CreateResultUpload::route('/create'),
            // 'edit' => Pages\EditResultUpload::route('/{record}/edit'),
        ];
    }
}
