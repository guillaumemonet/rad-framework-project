<?php

namespace Project\Controllers;

use Rad\Controller\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HelloWorldController
 * @author guillaume
 */

/**
 * Simple example for testing purpose
 *
 * @author guillaume
 */
class HelloWorldController extends Controller {

    /**
     * @get /
     * @produce html
     */
    public function helloWorld() {
        return "<b>Hello World</b>";
    }

}
