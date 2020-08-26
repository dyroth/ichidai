<?php


namespace App\Ichidai\Member;


use App\Ichidai\User\User;
use App\Mail\SendMemberPassword;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class MemberRepository
{

    public function getAll()
    {
        return User::where('admin', false)->get()->sortBy('name');
    }

    public function update(User $member, array $all, $sendRegistrationMail = false)
    {
        if ($sendRegistrationMail) {
            $password = Str::random('8');

            $all['password'] = Hash::make($password);

            Mail::to($member->email)
                ->send(new SendMemberPassword($member->name, $password, $member->email));
        }

        $all['birthdate'] = Carbon::createFromFormat('d/m/Y', $all['birthdate']);

        $member->fill($all);
        $member->save();
    }

    public function delete(User $user)
    {
        $user->delete();
    }
}
