<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
 
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $roomeo; 
     
    public function __construct($roomeo)
    {
        $this->roomeo = $roomeo;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->from('roomeouk@gmail.com')
                    ->view('mails.contact');
                    // ->with(
                    //   [
                    //         'testVarOne' => '1',
                    //         'testVarTwo' => '2',
                    //   ]);
                    //   ->attach(public_path('/images').'/demo.jpg', [
                    //           'as' => 'demo.jpg',
                    //           'mime' => 'image/jpeg',
                    //   ]);
    }
}