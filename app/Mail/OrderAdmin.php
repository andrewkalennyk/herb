<?php

namespace App\Mail;

class OrderAdmin extends BaseMail
{
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('letters.order_admin')->with(
            [
                'order'=> $this->data,
                'products' => $this->data->order_products
            ]
        );
    }
}
