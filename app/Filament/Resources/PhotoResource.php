<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhotoResource\Pages;
use App\Filament\Resources\PhotoResource\RelationManagers;
use App\Models\Photo;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Catalog;

class PhotoResource extends Resource
{
    protected static ?string $model = Photo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $arr = [];
        $catalogs = Catalog::all();
        foreach($catalogs as $value) {
            $arr[$value->url] = $value->name;
        }
        return $form
            ->schema([
                Select::make('catalog')
                    ->options($arr),
                TextInput::make('title'),
                FileUpload::make('url'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('url'),
                TextColumn::make('title'),
                TextColumn::make('catalog'),
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
            'index' => Pages\ListPhotos::route('/'),
            'create' => Pages\CreatePhoto::route('/create'),
            'edit' => Pages\EditPhoto::route('/{record}/edit'),
        ];
    }
}
