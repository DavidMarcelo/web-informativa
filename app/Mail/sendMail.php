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
        $usuario = $usuario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Registro de un nuevo usuario.')
            ->view('email.usuario', ['usuario' => $this->usuario]);
        /**->from(
            'cdmarceloz@gmail.com', 
            'Sistema Automatizado de Envio de Notificaciones') */
    }
}
