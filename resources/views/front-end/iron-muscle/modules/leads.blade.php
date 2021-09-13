<form action="https://martialytics.com/widgets/leads" method="post" onSubmit="document.getElementById('ma_local_time').value = new Date().getTimezoneOffset();" autocomplete="false">
    <input type="text" name="email" id="email" value="" style="position:absolute;border:none;width:1px;height:1px;background-color:rgba(255,255,255,0);" />
    <input type="hidden" name="ma_school_id" id="ma_school_id" value="cf497ca5-0df51808-e93273da-57dfd821" />
    <input type="hidden" name="ma_local_time" id="ma_local_time" />
    <label for="ma_fullname" style="display:block;font-family:'Verdana';font-size:14px;margin-top:12px;margin-left:2px;">Voor- en achternaam</label>
    <input type="text" name="ma_fullname" id="ma_fullname" style="width:100%;border: 2px solid #5a9aa8;padding: 10px 15px;font-family: 'Verdana';font-size: 13px;-moz-outline: none;outline: none;-webkit-outline: none;" />
    <label for="ma_email" style="display:block;font-family:'Verdana';font-size:14px;margin-top:12px;margin-left:2px;">Email</label>
    <input type="text" name="ma_email" id="ma_email" style="width:100%;border: 2px solid #5a9aa8;padding: 10px 15px;font-family: 'Verdana';font-size: 13px;-moz-outline: none;outline: none;-webkit-outline: none;" />
    <label for="ma_phone" style="display:block;font-family:'Verdana';font-size:14px;margin-top:12px;margin-left:2px;">Telefoon</label>
    <input type="text" name="ma_phone" id="ma_phone" style="width:100%;border: 2px solid #5a9aa8;padding: 10px 15px;font-family: 'Verdana';font-size: 13px;-moz-outline: none;outline: none;-webkit-outline: none;" />
{{--    <label for="ma_venue" style="display:block;font-family:'Verdana';font-size:14px;margin-top:12px;margin-left:2px;">Voorkeur dojo:</label>--}}
{{--    <select name="ma_venue" id="ma_venue" style="width:100%;padding: 10px 11px;border: 2px solid #5a9aa8;text-align: left;"><option value="d1701f4a-5007b064-9d77a936-c60ce6c7">Honbu</option><option value="16784556-5947a95b-75fc968f-2151e1d9">Dojo Anselmo</option><option value="4e8c296f-eab9ada6-9d0e5605-d0488a34">Outdoortraining</option></select>--}}
{{--    <label for="ma_interests" style="display:block;font-family:'Verdana';font-size:14px;margin-top:12px;margin-left:2px;">Ik heb interesse in:</label>--}}
{{--    <input type="text" name="ma_interests" id="ma_interests" style="width:100%;border: 2px solid #5a9aa8;padding: 10px 15px;font-family: 'Verdana';font-size: 13px;-moz-outline: none;outline: none;-webkit-outline: none;" />--}}
    <label for="ma_referral" style="display:block;font-family:'Verdana';font-size:14px;margin-top:12px;margin-left:2px;">Waar heb je van ons gehoord?</label>
    <select name="ma_referral" id="ma_referral" style="width:100%;padding: 10px 11px;border: 2px solid #5a9aa8;text-align: left;">
        <option value="">Selecteer</option>
        <option value="Facebook">Facebook</option>
        <option value="Twitter">Twitter</option>
        <option value="Google+">Google+</option>
        <option value="LinkedIn">LinkedIn</option>
        <option value="Family">Familie</option>
        <option value="Friend">Vrienden</option>
        <option value="Magazine">Magazine</option>
        <option value="Newspaper">Krant</option>
        <option value="Television">TV</option>
        <option value="Brochure">Brochure</option>
        <option value="Leaflet">Leaflet</option>
        <option value="Poster">Poster</option>
        <option value="Phone Call">Telefoon</option>
        <option value="Website">Website</option>
        <option value="Word of Mouth">Mond aan mond</option>
        <option value="Other Advertising">Andere</option>
    </select>
    <input type="submit" name="ma_submit" value="Aanvragen" style="cursor: pointer; width:100%;border: 0px;background: #1f7f5c;height: 38px;line-height: 38px;color: #fff;font-family: 'Verdana';font-size: 14px;text-transform: uppercase;padding: 0px 69px;display: block;margin-top: 10px;" />
</form>
