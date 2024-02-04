<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ObservacoesResource\Pages;
use App\Filament\Resources\ObservacoesResource\RelationManagers;
use App\Models\Colaborador;
use App\Models\Observacoes;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ObservacoesResource extends Resource
{
    protected static ?string $model = Observacoes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('observacoes')->label("Observações"),
                Select::make('colaborador_id')
                ->label('colaboradores')
                ->options(Colaborador::all()->pluck('nome', 'id'))
                ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListObservacoes::route('/'),
            'create' => Pages\CreateObservacoes::route('/create'),
            'edit' => Pages\EditObservacoes::route('/{record}/edit'),
        ];
    }
}
