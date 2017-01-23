<?php

require_once 'ControleurSecurise.php';
/**
 * Created by PhpStorm.
 * User: Asmae
 * Date: 17/01/2017
 * Time: 19:16
 */
class ControleurTeacher extends ControleurSecurise
{

    public function index() {

        $this->genererVue();

    }
}