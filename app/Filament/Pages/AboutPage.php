<?php

namespace App\Filament\Pages;

use App\Models\About;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;

class AboutPage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'Website';

    protected static string $view = 'filament.pages.about-page';
    public $data = [];

    public function mount(): void
    {
        $this->data = About::first();
        $this->form->fill($this->data?->toArray() ?? []);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                    ->schema([
                        Section::make(__('Stat'))->schema([

                            TextInput::make('number_of_students')
                                ->label('Number of Students')
                                ->translateLabel()
                                ->required()
                                ->numeric(),
                            TextInput::make('number_of_Hafez')
                                ->label('Number of Hafez')
                                ->translateLabel()
                                ->required()
                                ->numeric(),
                            TextInput::make('number_of_teachers')
                                ->label('Number of Teachers')
                                ->translateLabel()
                                ->required()
                                ->numeric(),
                        ]),
                        Section::make(__('Youtube Video'))->schema([
                            TextInput::make('youtube_video_title')
                                ->label('Youtube Video Title')
                                ->translateLabel()
                                ->required(),
                            TextInput::make('youtube_video_description')
                                ->label('Youtube Video Description')
                                ->translateLabel()
                                ->required(),
                            TextInput::make('youtube_video_link')
                                ->label('Youtube Video Link')
                                ->url()
                                ->translateLabel()
                                ->required(),
                        ])
                    ])
            ])
            ->model(About::first())
            ->statePath('data');
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();
            About::updateOrCreate(
                ['id' => 1], // Search criteria
                $data // Values to update or create
            );
        } catch (Halt $exception) {
            return;
        }

        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

}
