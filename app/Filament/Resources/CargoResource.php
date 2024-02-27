<?php

namespace App\Filament\Resources;

use App\Filament\Fields\Money;
use App\Filament\Resources\CargoResource\Pages;
use App\Filament\Resources\CargoResource\RelationManagers;
use App\Models\Cargo;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class CargoResource extends Resource
{
    protected static ?string $model = Cargo::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nome_cargo')->label("Nome do cargo")->minLength(2)->maxLength(255),
                Money::make("salario"),
               // Forms\Components\Select::make('Colaborador_id')->label('Colaborador')->placeholder("Selecione um colaborador")->relationship('colaborador', 'nome')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nome_cargo')->label("Cargos")->words(5)->searchable()->sortable(),
                TextColumn::make("salario")->label("salario")->searchable()->sortable()

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
            'index' => Pages\ListCargos::route('/'),
            'create' => Pages\CreateCargo::route('/create'),
            'edit' => Pages\EditCargo::route('/{record}/edit'),
        ];
    }
}
