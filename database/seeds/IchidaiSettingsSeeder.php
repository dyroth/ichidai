<?php

use App\Ichidai\Setting\Setting;
use Illuminate\Database\Seeder;

class IchidaiSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::truncate();

        Setting::create([
            "name" => "general_info",
            "properties" =>[
                'general' => [
                    'name' => 'Ichidai',
                    'martial_art' => "Karate",
                    'martial_art_style' => "Kyokushin",
                ],
                'contact_info' => [
                    'email' =>"info@ichidai.be",
                    'phone' => "+32 496 10 60 90",
                    'street_and_number' => "Eikenstraat 8",
                    'postal_code' => "2000",
                    'city' => "Antwerpen",
                    'country' => "België",
                    'google_maps_url' => "https://goo.gl/maps/GXRiv",
                    //BE51 7310 0497 5162
                ],
                'social_media' => [
                    'facebook' => "https://www.facebook.com/ichidaidojo/",
                    'instagram' =>"https://twitter.com/ichidaidojo",
                    'twitter' => null,
                    'youtube' => "https://www.youtube.com/channel/UCXwavF9lqNrpFvWP0mxCkrw",
                ],
                'footer_text' => [
                    'footer_title' => "Masutatsu Oyama",
                    'footer_text' => "One becomes a beginner after one thousand days of training and an expert after ten thousand days of practice.",
                ]
            ]
        ]);

        Setting::create([
            "name" => "intro",
            "properties" => [
                "text" => '<p><span style="font-size: 24px;">Kyokushin Karate</span></p><p>Kyokushinkai staat bekend als de hardste en vrijwel de enige officiële vorm van "fullcontact"-karate. Het is een volwaardige karatestijl waarin de karateonderdelen kihon, kumite en kata alle verplichte onderdelen bij examens zijn. Kyokushinkai kenmerkt zich door gedisciplineerde en geestdriftige beoefening. Traditioneel wordt de \'Fighting Spirit\' (Kokoro), de Bushido (krijgerscode) en de dojo-kun (dojoregels) dan ook zeer hoog aangeschreven. Het gevecht zelf vormt het zwaartepunt van deze karatestijl. Kyokushinkai staat ook wel bekend als de \'world\'s hardest karate\'.</p><p><span style="font-size: 24px;">Ichidai</span></p><p>Ichi Dai dojo is de enigste karateclub in het centrum van Antwerpen waar Kyokushin karate beoefend wordt. Onze lessen kunnen zowel recreatief als competitief gevolgd worden. We werken er hard aan om de 4 principes van onze krijgskunst even hard naar voor te brengen. Deze zijn: stamina (fysieke training), techniek, kata (stijloefeningen) en kumite (full-contact vechten). Onze lessen zijn voor iedereen en voor alle leeftijden.</p><p>Onze lesgevers zijn op z\'n Japans getraind en proberen dit ook zo goed mogelijk door te geven aan de leden.</p>',
                "filename" => "intro.png",
            ]
        ]);
    }
}

