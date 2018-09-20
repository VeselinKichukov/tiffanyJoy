<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactsFormMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $address;
    protected $name;
    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->email = $data['email'];
        $this->phoneNumber = null;
        if (isset($data['phoneNumber'])) {
          $this->phoneNumber = $data['phoneNumber'];
        }
        $this->subject = $data['subject'];
        $this->messageContent = $data['messageContent'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "NEW message from TiffanyApart";

        $data = ['firstName'=>$this->firstName,
                  'lastName'=>$this->lastName,
                  'email'=>$this->email,
                  'phoneNumber'=>$this->phoneNumber,
                  'subject'=>$this->subject,
                  'messageContent'=>$this->messageContent];

        return $this
                ->subject($subject)
                ->view('emails.contact')->with($data);
    }
}
