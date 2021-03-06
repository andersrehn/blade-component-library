<?php

namespace BladeComponentLibrary\Component\Stripe;

class Stripe extends \BladeComponentLibrary\Component\BaseController
{
    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        // Add base class
        array_unshift($this->data['classList'], 'stripe');
    }
}
