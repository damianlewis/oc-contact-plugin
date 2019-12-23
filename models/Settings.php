<?php

declare(strict_types=1);

namespace DamianLewis\Contact\Models;

use Model;
use October\Rain\Database\Traits\Validation;
use System\Behaviors\SettingsModel;

class Settings extends Model
{
    use Validation;

    public $implement = [
        SettingsModel::class
    ];

    public $settingsCode = 'damianlewis_contact_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        'email' => 'email',
        'telephone' => 'regex:/^[0-9 ]+$/'
    ];
}
