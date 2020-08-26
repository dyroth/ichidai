@component('mail::message')
{{ $name }}
Uw profiel werd aangemaakt op {{ $appName }}.<br>
U kan inloggen om uw profiel te bekijken.

Uw gebruikersnaam: {{ $email }}<br>
Uw wachtwoord: {{ $password }}

U kan dit wachtwoord veranderen door op "wachtwoord vergeten" te klikken op de login pagina.

@component('mail::button', ['url' => route('login')])
Inloggen
@endcomponent
Osu!
{{ $appName }}
@endcomponent
