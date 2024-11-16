<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Branch;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\GradingSystem;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Symfony\Component\Console\Input\ArrayInput;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GradingSystemResource\Pages;
use App\Filament\Resources\GradingSystemResource\RelationManagers;

class GradingSystemResource extends Resource
{
    protected static ?string $model = GradingSystem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Examinations';


    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Grading System Name')
                    ->required(),

                Select::make('branch_ids')
                    ->label('Branches')
                    ->options(Branch::all()->pluck('name', 'id'))
                    ->multiple()
                    ->placeholder('Choose branches')
                    ->required(),

                Repeater::make('grading_system')
                    ->label('Grades')
                    ->schema([
                        TextInput::make('grade')->label('Grade')->placeholder('A,B,C,D,F,...')->required(),
                        TextInput::make('remark')->label('Remark')->placeholder('Excellent,Good,Bad,...')->required(),
                        TextInput::make('min_score')->label('Min Score')->numeric()->required(),
                        TextInput::make('max_score')->label('Max Score')->numeric()->required(),
                    ])
                    ->columns(4)
                    ->required(),


            ])->columns(1);
    }

    protected function getTableContentGrid(): ?array
    {
        return [
            'md' => 2,
            'xl' => 3,
        ];
    }
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ])
            ->columns([
                TextColumn::make('name')
                    ->label('Grading System Name'),
                ViewColumn::make('grading_system')
                    ->view('tables.columns.grading-system')

                    ->width('1/3')
                    ->toggleable(isToggledHiddenByDefault: true),
                ViewColumn::make('branch_ids')
                    ->view('tables.columns.branches')
                    ->label('Branches'),
            ])
            ->filters([])
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
            'index' => Pages\ListGradingSystems::route('/'),
            'create' => Pages\CreateGradingSystem::route('/create'),
            'edit' => Pages\EditGradingSystem::route('/{record}/edit'),
        ];
    }
}
