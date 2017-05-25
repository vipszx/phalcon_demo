<?php

namespace Modules\Modules\Frontend\Controllers;
use Modules\Models\User;
use Modules\Modules\Frontend\Models\User as MUser;
class IndexController extends ControllerBase
{

    public function indexAction()
    {
        return "fsdf";
        // $this->view->disable();
    }

    public function testAction($name)
    {
        return "name:".$name;
    }

    public function bbAction()
    {
        // $user = new User();
        $user = new MUser();
        $result = $user::find();
        var_dump($result->toArray());
        // echo "dd";
    }

}

