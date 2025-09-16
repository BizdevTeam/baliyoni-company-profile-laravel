<?php

namespace App\Filament\Resources\NilaiUtamaResource\Pages;

use App\Filament\Resources\NilaiUtamaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNilaiUtama extends EditRecord
{
    protected static string $resource = NilaiUtamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
