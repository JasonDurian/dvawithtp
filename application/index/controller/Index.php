<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    
    public function hello($id = '', $name = 'world') {
    	
//         $this->assign('name', $name);
//         return $this->fetch();
		$this->redirect('index/News/read',['id'=>5]);
    }
    
}
