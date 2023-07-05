<?php

namespace App\Mail;

use App\Http\Controllers\ContactController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $fullnames;
    public $email;
    public $phone;
    public $site;
    public $message;
    public $type;

    public function __construct($fullnames, $email, $phone, $site, $message, $type)
    {
        $this->fullnames = $fullnames;
        $this->email     = $email;
        $this->phone     = $phone;
        $this->site      = $site;
        $this->message   = $message;
        $this->type      = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (strtolower($this->type) == ContactController::EMAIL_TYPE_ADMIN)
            return $this->view('emails.admin')
                ->subject('OMV website')
                ->from("info@alphatobeta.co.za")
                ->with(
                    [
                        'form_name' => $this->fullnames,
                        'form_email' => $this->email,
                        'form_phone'=>$this->phone,
                        'form_message'=>$this->message
                    ]
                );

        return $this->view('emails.client')
            ->subject('OMV auto response')
            ->with(
                [
                    'form_name' => $this->fullnames,
                    'form_email' => $this->email,
                    'form_phone'=>$this->phone,
                    'form_message'=>$this->message
                ]
            );
    }
}
