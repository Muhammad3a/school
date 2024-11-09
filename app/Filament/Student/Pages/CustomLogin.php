<?php

namespace App\Filament\Student\Pages;

use Filament\Pages\Page;

class CustomLogin extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.custom-login';
}
