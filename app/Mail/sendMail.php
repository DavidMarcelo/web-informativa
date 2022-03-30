<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class sendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $usuario;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usuario){
        $this->usuario = $usuario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(
            'yeekkasolucionglobal1@gmail.com',
            'YEEKA SOLUCIÓN GLOBAL')
        ->subject('Nuevo prestamo')
            ->view('email.usuario', ['usuario' => $this->usuario]);
        /** */
    }
}
