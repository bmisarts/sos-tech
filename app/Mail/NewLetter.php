<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewLetter extends Mailable
{
    use Queueable, SerializesModels;

    public $datas;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datas)
    {
        $this->datas = $datas;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $datas = $this->datas;
        return $this->subject($datas->subject)
                        ->view('mail.subscribtion', compact('datas'));
    }
}

