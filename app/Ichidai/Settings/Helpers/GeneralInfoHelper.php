<?php


namespace App\Ichidai\Settings\Helpers;


class GeneralInfoHelper
{
    public function getFormattedGeneralInfoHelperArray(array $all)
    {
        return [
            'general' => [
                'name' => $all['name'],
                'martial_art' => $all['martial_art'],
                'martial_art_style' => $all['martial_art_style'] ?? null,
            ],
            'contact_info' => [
                'email' => $all['email'] ?? null,
                'phone' => $all['phone'] ?? null,
                'street_and_number' => $all['street_and_number'] ?? null,
                'postal_code' => $all['postal_code'] ?? null,
                'city' => $all['city'] ?? null,
                'country' => $all['country'] ?? null,
                'google_maps_url' => $all['google_maps_url'] ?? null,
            ],
            'social_media' => [
                'facebook' => $all['facebook'] ?? null,
                'instagram' => $all['instagram'] ?? null,
                'twitter' => $all['twitter'] ?? null,
                'youtube' => $all['youtube'] ?? null,
            ],
            'footer_text' => [
                'footer_title' => $all['footer_title'] ?? null,
                'footer_text' => $all['footer_text'] ?? null,
            ],
        ];
    }

    public function getEmptyGeneralInfoHelperArray()
    {
        return [
            'general' => [
                'name' => '',
                'martial_art' => '',
                'martial_art_style' => '',
            ],
            'contact_info' => [
                'email' => '',
                'phone' => '',
                'street_and_number' => '',
                'postal_code' => '',
                'city' => '',
                'country' => '',
                'google_maps_url' => '',
            ],
            'social_media' => [
                'facebook' => '',
                'instagram' => '',
                'twitter' => '',
                'youtube' => '',
            ],
            'footer_text' => [
                'footer_title' => '',
                'footer_text' => '',
            ],
        ];
    }
}
