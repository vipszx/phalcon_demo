<?php

namespace Modules\Modules\Frontend\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        return "fsdf";
        // $this->view->disable();
    }

    public function testAction($nam)
    {
        return "name:".$name;
    }

}

