<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Catalog;
use App\Models\Order;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getLabel(): string
    {
        return 'Заказ';
    }

    public static function getPluralLabel(): string
    {
        return 'Заказы';
    }

    public static function form(Form $form): Form
    {
        $packages = Package::all();
        return $form
            ->schema([
                DateTimePicker::make('created_at')
                    ->label('Дата и время')
                    ->disabled(),
                TextInput::make('name')
                    ->label('Имя')
                    ->required(),
                TextInput::make('email')
                    ->label('Имейл')
                    ->required()
                    ->email(),
                TextInput::make('tel')
                    ->label('Телефон')
                    ->required(),
                Select::make('package_id')
                    ->label('Пакет услуг')
                    ->options($packages->pluck('name', 'id')->toArray()),
                Textarea::make('message')
                    ->label('Сообщение')
                    ->disabled(),
                Select::make('status')
                    ->label('Статус')
                    ->options([
                        'new' => 'New',
                        'accepted' => 'Accepted',
                        'rejected' => 'Rejected',
                        'completed' => 'Completed',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Дата'),
                TextColumn::make('status')
                    ->label('Статус'),
                TextColumn::make('name')
                    ->label('Имя'),
                TextColumn::make('email')
                    ->label('Имейл'),
                TextColumn::make('tel')
                    ->label('Телефон'),
                TextColumn::make('package.name')
                    ->label('Пакет услуг')
                    ->default(fn ($record) => $record->package ? $record->package->name : 'Не выбран'),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
