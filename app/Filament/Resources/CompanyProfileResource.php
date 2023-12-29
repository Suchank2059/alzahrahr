<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyProfileResource\Pages;
use App\Models\CompanyProfile;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CompanyProfileResource extends Resource
{
    protected static ?string $model = CompanyProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('company_name')->required(),
                        TextInput::make('company_email')->required()->email(),
                        TextInput::make('primary_contact')->required()->numeric(),
                        TextInput::make('secondary_contact')->numeric()->inputMode('decimal'),
                        TextInput::make('location')->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('company_name'),
                TextColumn::make('company_email'),
                TextColumn::make('primary_contact'),
                TextColumn::make('secondary_contact'),
                TextColumn::make('location'),

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
            'index' => Pages\ListCompanyProfiles::route('/'),
            'create' => Pages\CreateCompanyProfile::route('/create'),
            'edit' => Pages\EditCompanyProfile::route('/{record}/edit'),
        ];
    }
}
