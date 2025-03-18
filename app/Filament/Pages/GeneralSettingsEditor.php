<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\Page;
use App\Models\GeneralSetting;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Livewire\Attributes\On;

class GeneralSettingsEditor extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'General Settings';
    protected static ?string $title = 'General Settings';
    protected static string $view = 'filament.pages.general-settings-editor';

    public ?GeneralSetting $settings = null;
    public $site_name;
    public $email;
    public $logo;
    public $favicon;
    public $currency_sym;
    public $currency_code;
    public $address;
    public $phone;

    public function mount()
    {
        // Get first setting or create a default one
        $this->settings = GeneralSetting::firstOrCreate([]);

        // Fill the form with existing data
        $this->form->fill($this->settings->toArray());
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Grid::make(2) // Set to 2 columns
            ->schema([
                TextInput::make('site_name')
                    ->label('Site Name')
                    ->required(),
                TextInput::make('email')
                    ->label('Site Email')
                    ->email(),
                FileUpload::make('logo')
                    ->label('Logo'),
                FileUpload::make('favicon')
                    ->label('Favicon'),
                TextInput::make('currency_sym')
                    ->label('Currency Symbol'),
                TextInput::make('currency_code')
                    ->label('Currency Code'),
                Textarea::make('address')
                    ->label('Address'),
                TextInput::make('phone')->numeric()
            ]),
        ];
    }


    public function save()
    {
        // Update database with form data
        $this->settings->update($this->form->getState());

        // Success notification
        Notification::make()
            ->title('Settings Updated Successfully')
            ->success()
            ->send();
    }
}
