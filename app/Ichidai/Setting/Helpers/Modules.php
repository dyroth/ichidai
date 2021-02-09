<?php


namespace App\Ichidai\Setting\Helpers;


use App\Ichidai\Setting\Setting;

class Modules
{
    public static function membersEnabled(): bool
    {
        return Setting::getSetting('members_enabled')->enabled;
    }
}
