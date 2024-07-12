<?php

namespace App\Filament\Lampminds\FormComponents;

use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;

class LmpFormSnake
{
    static function make(string $label, string $name = ''): TextInput
    {
        return TextInput::make($name == '' ? Str::snake($label) : $name)
            ->label(__($label))
            ->helperText(__('Only lowercase letters, numbers, and underscores are allowed.'))
            ->tel()
            ->telRegex('/^[a-z0-9_]+$/');
    }
}
