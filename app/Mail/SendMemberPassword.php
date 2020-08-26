<?php

namespace App\Mail;

use App\Ichidai\Setting\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMemberPassword extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $appName;
    /**
     * @var string
     */
    private $memberEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $name, string $password, string $memberEmail)
    {
        $this->name = $name;
        $this->password = $password;
        $this->memberEmail = $memberEmail;

        $settings = Setting::where('name', 'general_info')->first()->properties;
        $this->email = $settings->contact_info->email;
        $this->appName =$settings->general->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->markdown('admin.members.mail.send_password')->with([
            'name' => $this->name,
            'password' => $this->password,
            'appName' => $this->appName,
            'email' => $this->memberEmail,
        ]);
    }
}
