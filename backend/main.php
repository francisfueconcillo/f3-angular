<?php

class Main extends Controller {

    function __construct() {
        parent::__construct();

    }

    function index($f3) {
        echo View::instance()->render('index.html');
    }

}
