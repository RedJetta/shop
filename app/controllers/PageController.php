<?php


namespace app\controllers;


class PageController
{
    public function indexAction(){
        echo __METHOD__;
    }
    public function viewAction(){
        echo 'i am view action';
    }
}