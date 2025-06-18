<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdmissionReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $studentData;

    public function __construct($studentData)
    {
        $this->studentData = $studentData;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
                    ->subject('Thank you for your admission application')
                    ->view('emails.admission_reply')
                    ->with(['studentData' => $this->studentData]);
    }
}
