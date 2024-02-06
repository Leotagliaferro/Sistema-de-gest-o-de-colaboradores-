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
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FuncaoProgramadaResource extends Resource
{
    protected static ?string $model = FuncaoProgramada::class;
    

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Cargo')->label('cargo'),
                TextInput::make('cpf')->label("cpf"),
                TextInput::make('telefone')->label("telefone"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               
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
            'index' => Pages\ListFuncaoProgramadas::route('/'),
            'create' => Pages\CreateFuncaoProgramada::route('/create'),
            'edit' => Pages\EditFuncaoProgramada::route('/{record}/edit'),
        ];
    }
}
