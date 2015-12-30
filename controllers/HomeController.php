<?php

class HomeController {

    protected $twig;

    public function __construct($twig) {
        $this->twig = $twig;
    }

    public function view(){
        return $this->twig->render('home.html');
    }
}

return ErrorController;
