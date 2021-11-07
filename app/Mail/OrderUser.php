<?php

namespace App\Mail;

class OrderUser extends BaseMail
{
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('letters.order_user')->with(
            [
                'order'=> $this->data,
            ]
        );
    }
}
