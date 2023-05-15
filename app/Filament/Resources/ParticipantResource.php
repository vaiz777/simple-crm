<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParticipantResource\Pages;
use App\Filament\Resources\ParticipantResource\RelationManagers;
use App\Models\Participant;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ParticipantResource extends Resource
{
    protected static ?string $model = Participant::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('firstname')
                    ->label(label: 'First Name')
                    ->required(),
                TextInput::make('lastname')
                    ->label(label: 'Last Name')
                    ->required(),
                TextInput::make('email')
                    ->label(label: 'Email')
                    ->required()
                    ->unique(),
                TextInput::make('skype')
                    ->label(label: 'Skype')
                    ->url(),
                TextInput::make('linkedin')
                    ->label(label: 'Linkedin')
                    ->url(),
                Select::make('employee_id')
                    ->required()
                    ->relationship(relationshipName: 'employee', titleColumnName: 'name'),
                Select::make('status')
                    ->required()
                    ->options([
                        '1' => 'First',
                        '2' => 'Second',
                        '3' => 'Third',
                        '4' => 'Fourth'
                    ]),
                TextInput::make('phone')
                    ->label(label: 'Phone Number')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('firstname')
                    ->searchable(),
                TextColumn::make('lastname')
                    ->searchable(),
                TextColumn::make('email'),
                TextColumn::make('linkedin')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListParticipants::route('/'),
            'create' => Pages\CreateParticipant::route('/create'),
            'edit' => Pages\EditParticipant::route('/{record}/edit'),
        ];
    }
}
