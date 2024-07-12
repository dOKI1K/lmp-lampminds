<?php

namespace App\Filament\Lampminds\TableComponents;

use Filament\Tables\Columns\TextColumn;

class LmpTableUpdatedBy
{
    static function make(string $label = 'Updated By', string $name = 'updated_by_nickname'): TextColumn
    {
        return TextColumn::make($name)
            ->label($label)
            //            ->formatStateUsing(function ($state, $record) use ($name) {
            //                return nickname($record->{$name});
            //            })
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true);
    }
}
