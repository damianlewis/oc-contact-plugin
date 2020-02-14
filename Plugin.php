<?php

declare(strict_types=1);

namespace DamianLewis\Contact;

use DamianLewis\Contact\Components\ContactDetails;
use DamianLewis\Contact\Models\Settings;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name' => 'Contact',
            'description' => 'Manage the contact details.',
            'author' => 'Damian Lewis',
            'icon' => 'icon-address-card'
        ];
    }

    public function registerComponents(): array
    {
        return [
            ContactDetails::class => 'contactDetails'
        ];
    }

    public function registerPermissions(): array
    {
        return [
            'damianlewis.contact.access_settings' => [
                'tab' => 'Contact',
                'label' => 'Access the contact settings.'
            ],
        ];
    }

    public function registerSettings(): array
    {
        return [
            'settings' => [
                'label' => 'Contact Details',
                'description' => 'Manage the contact details.',
                'icon' => 'icon-address-card',
                'class' => Settings::class,
                'category' => SettingsManager::CATEGORY_MYSETTINGS,
                'permissions' => ['damianlewis.contact.access_settings']
            ]
        ];
    }
}
