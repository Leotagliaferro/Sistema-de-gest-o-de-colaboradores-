<?php

namespace App\Filament\Resources\FuncaoProgramadaResource\Pages;

use App\Filament\Resources\FuncaoProgramadaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFuncaoProgramadas extends ListRecords
{
    protected static string $resource = FuncaoProgramadaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
