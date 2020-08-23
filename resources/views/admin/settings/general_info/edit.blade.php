@extends('admin._partials.main')


@section('content')
    <div class="wrapper wrapper-content">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data"
              action="{{ route('admin.general_info.update') }}">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Algemene info</h5>
                        </div>

                        <div class="ibox-content">
                            @include('admin._partials.form.errors')

                            @include('admin._partials.form.input', ['label' => 'Club naam', 'name' => 'name', 'value' => old('name', $generalInfo->general->name ?? "")])
                            @include('admin._partials.form.input', [
                                'label' => 'Martial art naam',
                                'name' => 'martial_art',
                                'value' => old('martial_art', $generalInfo->general->martial_art ?? ""),
                                'placeholder' => 'Bvb: Karate, Thaiboksen, Jiu Jitsu, Boksen'
                            ])
                            @include('admin._partials.form.input', [
                                'label' => 'Martial art stijl',
                                'name' => 'martial_art_style',
                                'value' => old('martial_art_style', $generalInfo->general->martial_art_style ?? ""),
                                'placeholder' => 'Bvb: Kyokushin, Muay Thai, No-gi, Chute Boxe'
                            ])
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Contact info</h5>
                        </div>

                        <div class="ibox-content">
                            @include('admin._partials.form.input', ['label' => 'Email', 'name' => 'email', 'value' => old('email', $generalInfo->contact_info->email ?? "")])
                            @include('admin._partials.form.input', ['label' => 'Telefoon', 'name' => 'phone', 'value' => old('phone', $generalInfo->contact_info->phone ?? "")])
                            @include('admin._partials.form.input', ['label' => 'Straat & nr', 'name' => 'street_and_number', 'value' => old('street_and_number', $generalInfo->contact_info->street_and_number ?? "")])
                            @include('admin._partials.form.input', ['label' => 'Postcode', 'name' => 'postal_code', 'value' => old('postal_code', $generalInfo->contact_info->postal_code ?? "")])
                            @include('admin._partials.form.input', ['label' => 'Stad/gemeente', 'name' => 'city', 'value' => old('city', $generalInfo->contact_info->city ?? "")])
                            @include('admin._partials.form.input', ['label' => 'Land', 'name' => 'country', 'value' => old('country', $generalInfo->contact_info->country ?? "")])
                            @include('admin._partials.form.input', ['label' => 'Google maps url', 'name' => 'google_maps_url', 'value' => old('google_maps_url', $generalInfo->contact_info->google_maps_url ?? "")])
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Sociale media</h5>
                        </div>

                        <div class="ibox-content">
                            @include('admin._partials.form.input', ['label' => 'Facebook', 'name' => 'facebook', 'value' => old('facebook', $generalInfo->social_media->facebook ?? "")])
                            @include('admin._partials.form.input', ['label' => 'Instagram', 'name' => 'instagram', 'value' => old('instagram', $generalInfo->social_media->instagram ?? "")])
                            @include('admin._partials.form.input', ['label' => 'twitter', 'name' => 'twitter', 'value' => old('twitter', $generalInfo->social_media->twitter ?? "")])
                            @include('admin._partials.form.input', ['label' => 'youtube', 'name' => 'youtube', 'value' => old('youtube', $generalInfo->social_media->youtube ?? "")])
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Footer tekst</h5>
                        </div>

                        <div class="ibox-content">
                            @include('admin._partials.form.input', ['label' => 'Footer titel', 'name' => 'footer_title', 'value' => old('footer_title', $generalInfo->footer_text->footer_title ?? "")])
                            @include('admin._partials.form.text-field', ['label' => 'Footer tekst', 'name' => 'footer_text', 'value' => old('footer_text', $generalInfo->footer_text->footer_text ?? "")])

                            @include('admin._partials.form.submit', ['route' => route('admin.general_info.edit')])
                        </div>

                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection

