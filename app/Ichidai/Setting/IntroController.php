<?php

namespace App\Ichidai\Setting;

use App\Http\Requests\CreateEditIntro;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class IntroController extends Controller
{

    public function edit()
    {
        $intro = Setting::firstOrCreate(
            ['name' => 'intro'],
            ['properties' => [
                'text' => '',
                'filename' => '',
            ]]
        );

        $data['title'] = "Introductie";
        $data['intro'] = $intro->properties;

        return view('admin.settings.intro.edit', $data);
    }

    public function update(CreateEditIntro $request)
    {
        $intro = Setting::where(['name' => 'intro'])->first();

        $properties = [
            'text' => $request->text,
            'filename' => $intro->properties->filename,
        ];

        if (isset($request['photo'])) {
            $filename = 'intro.' . $request['photo']->getClientOriginalExtension();
            Storage::disk('local')->put('/public/upload/intro/' . $filename, file_get_contents($request['photo']));

            $properties['filename'] = $filename;
        }

        $intro->properties = $properties;

        $intro->save();

        return redirect(route('admin.introduction.edit'));
    }
}
