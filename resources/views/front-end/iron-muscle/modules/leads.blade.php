<form action="{{ route('leads') }}" method="post">
    @csrf
    <label for="fullname" style="display:block;font-family:'Verdana';font-size:14px;margin-top:12px;margin-left:2px;">Voor- en achternaam</label>
    <input type="text" name="fullname" id="fullname" style="width:100%;border: 2px solid {{ $errors->has('phone') ? '#f23a2e' : '#5a9aa8' }}; padding: 10px 15px;font-family: 'Verdana';font-size: 13px;-moz-outline: none;outline: none;-webkit-outline: none;" required />

    <label for="email" style="display:block;font-family:'Verdana';font-size:14px;margin-top:12px;margin-left:2px;">Email</label>
    <input type="email" name="email" id="email" style="width:100%;border: 2px solid{{ $errors->has('phone') ? '#f23a2e' : '#5a9aa8' }}; padding: 10px 15px;font-family: 'Verdana';font-size: 13px;-moz-outline: none;outline: none;-webkit-outline: none;" required />

    <label for="phone" style="display:block;font-family:'Verdana';font-size:14px;margin-top:12px;margin-left:2px;">Telefoon</label>
    <input type="text" name="phone" id="phone" style="width:100%;border: 2px solid {{ $errors->has('phone') ? '#f23a2e' : '#5a9aa8' }}; padding: 10px 15px;font-family: 'Verdana';font-size: 13px;-moz-outline: none;outline: none;-webkit-outline: none;" required />

    <label for="referral" style="display:block;font-family:'Verdana';font-size:14px;margin-top:12px;margin-left:2px;">Waar heb je van ons gehoord?</label>

    <select name="referral" id="referral" style="width:100%;padding: 10px 11px;border: 2px solid {{ $errors->has('phone') ? '#f23a2e' : '#5a9aa8' }}; text-align: left;">
        <option value="">Selecteer</option>
        <option value="Facebook">Facebook</option>
        <option value="Twitter">Twitter</option>
        <option value="Google+">Google+</option>
        <option value="LinkedIn">LinkedIn</option>
        <option value="Familie">Familie</option>
        <option value="Vrienden">Vrienden</option>
        <option value="Magazine">Magazine</option>
        <option value="Krant">Krant</option>
        <option value="TV">TV</option>
        <option value="Brochure">Brochure</option>
        <option value="Leaflet">Leaflet</option>
        <option value="Poster">Poster</option>
        <option value="Telefoon">Telefoon</option>
        <option value="Website">Website</option>
        <option value="Mond aan mond">Mond aan mond</option>
        <option value="Andere">Andere</option>
    </select>
    <input type="hidden" name="recipient_email" value="vanakenk@gmail.com">
    <input type="submit" name="submit" value="Aanvragen" style="cursor: pointer; width:100%;border: 0px;background: #1f7f5c;height: 38px;line-height: 38px;color: #fff;font-family: 'Verdana';font-size: 14px;text-transform: uppercase;padding: 0px 69px;display: block;margin-top: 10px;" />
</form>
