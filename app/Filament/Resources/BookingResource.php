<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->maxLength(255),
                Forms\Components\TextInput::make('email')->required()->email()->maxLength(255),
                Forms\Components\TextInput::make('phone')->required()->maxLength(255),
                Forms\Components\TextInput::make('theatre_name')->required()->maxLength(255),
                Forms\Components\DatePicker::make('booking_date')->required(),
                Forms\Components\TextInput::make('slot')->required()->maxLength(255),
                Forms\Components\TextInput::make('purpose')->required()->maxLength(255),
                Forms\Components\TextInput::make('addon')->maxLength(255),
                Forms\Components\TextInput::make('total_price')->required()->numeric(),
                Forms\Components\TextInput::make('razorpay_payment_id')->maxLength(255)->disabled(),
                Forms\Components\TextInput::make('razorpay_order_id')->maxLength(255)->disabled(),
                Forms\Components\TextInput::make('razorpay_signature')->maxLength(255)->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('phone')->searchable(),
                Tables\Columns\TextColumn::make('theatre_name')->searchable(),
                Tables\Columns\TextColumn::make('booking_date')->date()->sortable(),
                Tables\Columns\TextColumn::make('slot')->searchable(),
                Tables\Columns\TextColumn::make('purpose')->searchable(),
                Tables\Columns\TextColumn::make('addon')->searchable(),
                Tables\Columns\TextColumn::make('total_price')->money('INR')->sortable(),
                Tables\Columns\TextColumn::make('razorpay_payment_id')->searchable()->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('razorpay_order_id')->searchable()->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('razorpay_signature')->searchable()->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
