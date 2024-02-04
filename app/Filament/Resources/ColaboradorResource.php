<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ColaboradorResource\Pages;
use App\Filament\Resources\ColaboradorResource\RelationManagers;
use App\Models\Colaborador;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ColaboradorResource extends Resource
{
    protected static ?string $model = Colaborador::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nome')->label("Nome"),
                TextInput::make('cpf')->label("cpf"),
                TextInput::make('telefone')->label("telefone"),
                FileUpload::make('url_foto')->label("Insira uma imagem") 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nome')->label("Nome"),
                TextColumn::make('cpf')->label("CPF"),
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
            'index' => Pages\ListColaboradors::route('/'),
            'create' => Pages\CreateColaborador::route('/create'),
            'edit' => Pages\EditColaborador::route('/{record}/edit'),
        ];
    }
}
