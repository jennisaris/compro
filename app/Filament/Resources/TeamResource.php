<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('position')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('image_path')
                    ->image()
                    ->directory('team-members')
                    ->label('Photo')
                    ->columnSpanFull(), // Or manage layout with Grid
                Textarea::make('bio')
                    ->columnSpanFull(),
                TextInput::make('email')
                    ->email()
                    ->maxLength(255)
                    ->label('Email Address'),
                TextInput::make('linkedin_url')
                    ->url()
                    ->maxLength(255)
                    ->label('LinkedIn URL'),
                TextInput::make('twitter_url')
                    ->url()
                    ->maxLength(255)
                    ->label('Twitter URL'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_path')
                    ->label('Photo')
                    ->circular(), // Display as circular image
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('position'),
                TextColumn::make('email')
                    ->label('Email')
                    ->toggleable(isToggledHiddenByDefault: true), // Example: hide less critical info
                TextColumn::make('linkedin_url')
                    ->label('LinkedIn')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('twitter_url')
                    ->label('Twitter')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
