<?php

declare(strict_types=1);

namespace DamianLewis\Contact;

use DamianLewis\Contact\Components\ContactDetails;
use DamianLewis\Contact\Models\Settings;
use System\Classes\PluginBase;

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
                'label' => 'Manage the contact settings.'
            ],
        ];
    }

    public function registerSettings(): array
    {
        return [
            'settings' => [
                'label' => 'Contact Details',
                'description' => 'Manage the contact details used within the site.',
                'icon' => 'icon-address-card',
                'permissions' => ['damianlewis.contact.access_settings'],
                'class' => Settings::class,
                'order' => 999
            ]
        ];
    }
}
