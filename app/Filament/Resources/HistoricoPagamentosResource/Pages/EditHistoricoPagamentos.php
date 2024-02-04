<?php

namespace App\Filament\Resources\HistoricoPagamentosResource\Pages;

use App\Filament\Resources\HistoricoPagamentosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistoricoPagamentos extends EditRecord
{
    protected static string $resource = HistoricoPagamentosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
