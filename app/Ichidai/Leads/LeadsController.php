<?php

namespace App\Ichidai\Leads;

use App\Http\Controllers\Controller;
use App\Http\Requests\LeadsRequest;
use App\Mail\LeadsMail;
use Illuminate\Support\Facades\Mail;

class LeadsController extends Controller
{
    public function submitForm(LeadsRequest $request)
    {
        $emailData = [
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'referral' => $request->input('referral'),
        ];

        Mail::to(env('LEADS_EMAIL'))->send(new LeadsMail($emailData));

        session()->flash('success', 'Inschrijving verzonden.');

        return redirect()->back();
    }
}
