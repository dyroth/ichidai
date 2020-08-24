<?php

namespace App\Ichidai\Setting;

use App\Http\Controllers\Controller;
use App\Ichidai\Setting\Helpers\GeneralInfoHelper;
use Illuminate\Http\Request;

class GeneralInfoController extends Controller
{

    /**
     * @var GeneralInfoHelper
     */
    private $generalInfoHelper;

    public function __construct(GeneralInfoHelper $generalInfoHelper)
    {
        $this->generalInfoHelper = $generalInfoHelper;
    }

    public function edit()
    {
        $siteSettings = Setting::firstOrCreate(
            ['name' => 'general_info'],
            ['properties' => $this->generalInfoHelper->getEmptyGeneralInfoHelperArray()]
        );

        $data['title'] = "Algemene info";
        $data['generalInfo'] = $siteSettings->properties;

        return view('admin.settings.general_info.edit', $data);
    }

    public function update(Request $request)
    {
        $siteSettings = Setting::where(['name' => 'general_info'])->first();

        $siteSettings->properties = $this->generalInfoHelper->getFormattedGeneralInfoHelperArray($request->all());

        $siteSettings->save();

        return redirect(route('admin.general_info.edit'));
    }
}
