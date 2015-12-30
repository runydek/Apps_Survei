<?php

class ErrorController {

    protected $twig;

    public function __construct($twig) {
        $this->twig = $twig;
    }

    public function view(){
        return $this->twig->render('error.html');
    }
}

return ErrorController;
