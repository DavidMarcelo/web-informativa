<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mail_detail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()//$mail_detail)
    {
        //
        //$this->mail_detail = $mail_detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('sendMail');
    }
}
