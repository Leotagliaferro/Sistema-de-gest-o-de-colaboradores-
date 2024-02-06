<?php

namespace App\Filament\Resources\FuncaoProgramadaResource\Pages;

use App\Filament\Resources\FuncaoProgramadaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFuncaoProgramada extends EditRecord
{
    protected static string $resource = FuncaoProgramadaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
