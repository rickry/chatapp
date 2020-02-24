<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendRegisterToken extends Mailable
{
    use Queueable, SerializesModels;


    protected $user;
    protected $tokenUrl;

    /**
     * Create a new message instance.
     *
     * @param $user
     * @param $tokenUrl
     */
    public function __construct($user, $tokenUrl)
    {
        $this->user = $user;
        $this->tokenUrl = $tokenUrl;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.invite')
            ->with([
                "name"  => $this->user->name,
                "token" => $this->tokenUrl
            ])->subject("Verify Email Address");
    }
}
