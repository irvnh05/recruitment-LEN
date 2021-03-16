<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StatusSuccess extends Mailable
{
    use Queueable, SerializesModels;
    //penambahan variabel data untuk menampung data yang nanti akan di tampilkan & di pake di view     
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('hi@recruitmentlen.com','LEN@RECRUITMENT')
        ->subject('RECRUITMENT PT LEN')
        ->view('email.status-success');
    }
}
