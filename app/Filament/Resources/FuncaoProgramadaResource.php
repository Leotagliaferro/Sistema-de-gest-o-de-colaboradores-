<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FuncaoProgramadaResource\Pages;
use App\Filament\Resources\FuncaoProgramadaResource\RelationManagers;
use App\Models\Colaborador;
use App\Models\FuncaoProgramada;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FuncaoProgramadaResource extends Resource
{
    protected static ?string $model = FuncaoProgramada::class;


    protected static ?string $navigationIcon = 'heroicon-o-inbox-arrow-down';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('cargo_id')->label('cargo'),
                Forms\Components\DatePicker::make('horario_mudanca')->label('Data da Troca'),
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
                TextColumn::make('colaborador.nome')->label('nome')->searchable()->sortable(),
                TextColumn::make('status')->label('Status'),
                TextColumn::make('horario_mudanca')->label('Data da Troca')->searchable()->sortable(),
            ])
            ->filters([

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
            'index' => Pages\ListFuncaoProgramadas::route('/'),
            'create' => Pages\CreateFuncaoProgramada::route('/create'),
            'edit' => Pages\EditFuncaoProgramada::route('/{record}/edit'),
        ];
    }
}
