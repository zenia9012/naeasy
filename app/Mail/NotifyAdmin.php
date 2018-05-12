<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdmin extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $key;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, string $key)
    {
        $this->user = $user;
        $this->key = $key;
	    $this->from( env('MAIL_USERNAME'), 'NaEasy');
	    $this->subject = 'Activity in Naeasy Website';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	$user = $this->user;
    	$key = $this->key;

        return $this->markdown('emails.notify_admin', compact(['user', 'key']));
    }
}
