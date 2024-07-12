<?php

namespace App\Filament\Lampminds\TableComponents;

use Filament\Tables\Columns\IconColumn;
use Illuminate\Support\Str;

class LmpTableToggle
{
    static function make(string $label, string $name = ''): IconColumn
    {
        return IconColumn::make($name == '' ? Str::snake($label) : $name)
            ->label(__($label))
            ->sortable()
            ->alignment('center')
            ->searchable()
            ->boolean();
    }
}
