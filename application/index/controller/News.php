<?php
namespace app\index\controller;

use think\Controller;

class News extends Controller
{
    public function read($id = '123')
    {
        echo $id;
    }
}
