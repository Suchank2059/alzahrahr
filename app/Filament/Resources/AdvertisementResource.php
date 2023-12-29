<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertisementResource\Pages;
use App\Models\Advertisement;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AdvertisementResource extends Resource
{
    protected static ?string $model = Advertisement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('job_title')->required(),
                        TextInput::make('location')->required(),
                        TextInput::make('company_name')->required(),
                        TextInput::make('male_required')->label('No of male required')
                            ->numeric()
                            ->inputMode('decimal'),
                        TextInput::make('female_required')
                            ->label('No of female required')
                            ->numeric()
                            ->inputMode('decimal'),
                        TextInput::make('salary')
                            ->required()
                            ->label('Salary')
                            ->numeric()
                            ->inputMode('decimal'),

                        TextInput::make('minimun_qualification')->required(),
                        Textarea::make('job_description')
                            ->helperText('Enter each point on a new line. It will be displayed as a bulleted list.')
                            ->required(),
                        SpatieMediaLibraryFileUpload::make('image'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('job_title'),
                TextColumn::make('location'),
                TextColumn::make('company_name'),
                TextColumn::make('male_required'),
                TextColumn::make('female_required'),
                TextColumn::make('minimun_qualification'),
                TextColumn::make('job_description')->limit(20)->markdown(),
                SpatieMediaLibraryImageColumn::make('image'),
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
            'index' => Pages\ListAdvertisements::route('/'),
            'create' => Pages\CreateAdvertisement::route('/create'),
            'edit' => Pages\EditAdvertisement::route('/{record}/edit'),
        ];
    }
}
