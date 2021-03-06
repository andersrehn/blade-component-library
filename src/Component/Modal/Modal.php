<?php

namespace BladeComponentLibrary\Component\Modal;

class Modal extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "c-modal"; 

        //Panel
        if($isPanel) {
            $this->data['classList'][] = $this->getBaseClass() . "--is-panel"; 
        } else {
            $this->data['classList'][] = $this->getBaseClass() . "--is-modal"; 
        }

        //Overlay
        $this->data['classList'][] = $this->getBaseClass() . "--overlay-" . $overlay; 
    }
}