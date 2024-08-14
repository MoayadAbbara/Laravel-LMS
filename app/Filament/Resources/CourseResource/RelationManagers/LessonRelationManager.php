<?php

namespace App\Filament\Resources\CourseResource\RelationManagers;

use App\Filament\Resources\LessonResource;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class LessonRelationManager extends RelationManager
{

    protected static string $relationship = 'lesson';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('zoom_link')->required()->url(),
                FileUpload::make('pdf')->disk('public')->directory('lesson/pdfs'),
                FileUpload::make('video')->disk('public')->directory('lesson/videos')->maxSize(700000),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\Action::make('edit')
                    ->label('Details')
                    ->url(fn($record) => LessonResource::getUrl('edit', [$record->id]))
                    ->icon('heroicon-o-eye'),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
