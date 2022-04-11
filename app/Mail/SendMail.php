<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        
        
      /*  print_r($this->data);
        die();*/
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         
      if ($this->data['subject']=='contact') {
      return $this->from($this->data['email'])->subject('Price Quote ')->view('admin/title_of_price_invoice')->with('data', $this->data);
      }
       
       
       else if($this->data['subject'] == 'send_price'){
           
            return $this->from($this->data['web_email'])->subject('Get a Price Quote ')->view('admin/price_quote_email')->with('data', $this->data);
       }
            
     else if ($this->data['subject']=='follow_up') {
      return $this->from($this->data['email'])->subject('Following Up From '.$this->data['csr_email'])->view('admin/follow_up_mail')->with('data', $this->data);
      }
      else{

         echo "Faild to mail";
      }




    }
}

?>
