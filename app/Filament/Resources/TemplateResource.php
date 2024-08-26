<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\Template;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TemplateResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TemplateResource\RelationManagers;

class TemplateResource extends Resource
{
    protected static ?string $model = Template::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }

                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->unique(Template::class, 'slug', fn ($record) => $record),
                Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('thumbnail'),
                        Forms\Components\TextInput::make('video_thumbnail'),
                    ]),
                Grid::make(3)
                    ->schema([
                        Forms\Components\TextInput::make('tech_stack'),
                        Forms\Components\TextInput::make('live_preview_link'),
                        Forms\Components\TextInput::make('download_link')->required()->maxLength(255),
                    ]),
                RichEditor::make('body')->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('tech_stack'),
                Tables\Columns\TextColumn::make('download_link'),
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
            'index' => Pages\ListTemplates::route('/'),
            'create' => Pages\CreateTemplate::route('/create'),
            'edit' => Pages\EditTemplate::route('/{record}/edit'),
        ];
    }
}
