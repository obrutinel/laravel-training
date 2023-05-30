<?php

namespace App\Mail;

use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeCompany extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(
        public Company $company
    )
    {}

    public function build(): WelcomeCompany
    {
       return $this->subject('Welcome Company')
           ->to('olivier-to@gmail.com')
           ->from('olivier-from@gmail.com')
           ->view('admin.emails.welcome');
    }
}
