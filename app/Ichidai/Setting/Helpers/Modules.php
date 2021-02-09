<?php


namespace App\Ichidai\Setting\Helpers;


use App\Ichidai\Setting\Setting;

class Modules
{
    public static function membersEnabled(): bool
    {
        $membersEnabled = Setting::getSetting('members_enabled');

        return $membersEnabled ? $membersEnabled->enabled : false;
    }
}
