<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class GeneralMail
 * @package App\Mail
 */
class GeneralMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var string
     */
    public string $text;

    /**
     * @var string
     */
    public $subject;

    /**
     * Create a new message instance.
     *
     * @param string $text
     * @param string $subject
     */
    public function __construct(string $text, string $subject)
    {
        $this->text = $text;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): GeneralMail
    {
        return $this->subject($this->subject)->view('mails.general');
    }
}
