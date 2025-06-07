<?php

namespace App\Filament\Resources\ContactMessageResource\Pages;

use App\Filament\Resources\ContactMessageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContactMessage extends ViewRecord
{
    protected static string $resource = ContactMessageResource::class;

    // Optionally, you can add header actions specific to the view page
    // protected function getHeaderActions(): array
    // {
    //     return [
    //         // Actions\EditAction::make(), // If you want an edit button on the view page itself
    //     ];
    // }
}
