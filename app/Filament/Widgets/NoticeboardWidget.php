<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use App\Models\Noticeboard;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;

class NoticeboardWidget extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Noticeboard::query()->orderBy('created_at', 'desc')->limit(2)
            )
            ->paginated([5])
            ->columns([
                Tables\Columns\TextColumn::make('title')
                   ,
                Tables\Columns\TextColumn::make('author.name')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ,
                Tables\Columns\TextColumn::make('visibility')
                ,
                Tables\Columns\TextColumn::make('expiry_date')
                    ->date()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ,
                    TextColumn::make('description')->html()
                        ->toggleable()
                    ,
                Tables\Columns\TextColumn::make('branch.name')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ,
                Tables\Columns\TextColumn::make('attachment')
                ->toggleable(isToggledHiddenByDefault: true)
                   ,
                Tables\Columns\TextColumn::make('created_at')
                    
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }
}
