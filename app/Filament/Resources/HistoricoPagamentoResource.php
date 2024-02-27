<?php

namespace App\Filament\Resources;

use App\Filament\Fields\Money;
use App\Filament\Resources\HistoricoPagamentoResource\Pages;
use App\Filament\Resources\HistoricoPagamentoResource\RelationManagers;
use App\Models\Colaborador;
use App\Models\HistoricoPagamento;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistoricoPagamentoResource extends Resource
{
    protected static ?string $model = HistoricoPagamento::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('data_pagamento')->label('data do pagamento'),
                Money::make('price')->label('Valor do salario'),
                TextInput::make('cargo')->label('cargo'),
                Forms\Components\Select::make('colaborador_id')
                    ->label('Colaborador')
                    ->placeholder("Selecione um colaborador")
                    ->relationship('colaborador', 'nome')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('data_pagamento')->label("Data do pagamento")->searchable()->sortable(),
                TextColumn::make('valor_do_salario')->label("valor do salario")->searchable()->sortable(),
                TextColumn::make('cargo')->label("cargo")->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHistoricoPagamentos::route('/'),
            'create' => Pages\CreateHistoricoPagamento::route('/create'),
            'edit' => Pages\EditHistoricoPagamento::route('/{record}/edit'),
        ];
    }
}
