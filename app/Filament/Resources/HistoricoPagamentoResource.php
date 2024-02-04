<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoricoPagamentoResource\Pages;
use App\Filament\Resources\HistoricoPagamentoResource\RelationManagers;
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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('data_pagamento')->label("Data do pagamento"),
                TextColumn::make('valor_do_salario')->label("valor do salario"),
                TextColumn::make('cargo')->label("cargo")
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
