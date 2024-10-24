<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Branch;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Noticeboard;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NoticeboardResource\Pages;
use App\Filament\Resources\NoticeboardResource\RelationManagers;
use Faker\Core\File;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;

class NoticeboardResource extends Resource
{
    protected static ?string $model = Noticeboard::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Chats';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                
                Hidden::make('author_id')
                    ->default(auth()->id()),
                Select::make('visibility')
                    ->options([
                        'all' => 'All',
                        'teachers' => 'Teachers',
                        'students' => 'Students',
                    ])
                    ->multiple()
                    ->required(),
                Forms\Components\DatePicker::make('expiry_date')
                        ->required()
                ,
                Select::make('branch_id')
                    ->options(Branch::all()->pluck('name', 'id'))
                    ->label('Branch')
                    ->required(),
                    RichEditor::make('description')
                    ->required()
                    ->columnSpanFull()
                    ,
                    ])->columns(2),
                Section::make('attachment')
                    ->schema([
                    FileUpload::make('attachment')
                        ->imageEditor(),
                    ])

            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('author_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('visibility'),
                Tables\Columns\TextColumn::make('expiry_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('branch_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('attachment')
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
            'index' => Pages\ListNoticeboards::route('/'),
            'create' => Pages\CreateNoticeboard::route('/create'),
            'edit' => Pages\EditNoticeboard::route('/{record}/edit'),
        ];
    }
}
