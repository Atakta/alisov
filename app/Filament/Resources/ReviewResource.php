<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Review;
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

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getLabel(): string
    {
        return 'Отзыв';
    }

    public static function getPluralLabel(): string
    {
        return 'Отзывы';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DateTimePicker::make('review_date')
                    ->label('Дата и время')
                    ->disabled(),
                TextInput::make('name')
                    ->label('Имя')
                    ->disabled(),
                TextInput::make('email')
                    ->label('Имейл')
                    ->disabled(),
                Select::make('status')
                    ->label('Статус')
                    ->options([
                        'approved' => 'Approved',
                        'new' => 'New',
                        'canceled' => 'Canceled',
                    ]),
                Textarea::make('review')
                    ->label('Отзыв')
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('review_date')
                    ->label('Дата')
                    ->disabled(),
                TextColumn::make('name')
                    ->label('Имя'),
                TextColumn::make('email')
                    ->label('Имейл'),
                TextColumn::make('status')
                    ->label('Статус'),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
