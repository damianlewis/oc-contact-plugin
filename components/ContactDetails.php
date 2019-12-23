<?php

declare(strict_types=1);

namespace DamianLewis\Contact\Components;

use Cms\Classes\ComponentBase;
use DamianLewis\Contact\Models\Settings;

class ContactDetails extends ComponentBase
{
    /**
     * @var string
     */
    private $email;
    private $telephone;

    public function componentDetails()
    {
        return [
            'name' => 'Contact Details',
            'description' => 'Get the contact details.'
        ];
    }

    /**
     * Returns the email address.
     *
     * @return string
     */
    public function email(): string
    {
        return $this->email;
    }

    /**
     * Returns the telephone number.
     *
     * @return string
     */
    public function telephone(): string
    {
        return $this->telephone;
    }

    public function onRun()
    {
        $this->email = Settings::get('email');
        $this->telephone = Settings::get('telephone');
    }
}
