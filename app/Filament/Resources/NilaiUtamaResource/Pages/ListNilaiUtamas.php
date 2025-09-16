<?php

namespace App\Filament\Resources\NilaiUtamaResource\Pages;

use App\Filament\Resources\NilaiUtamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNilaiUtamas extends ListRecords
{
    protected static string $resource = NilaiUtamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
