<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    
    public function index() {
        echo phpinfo();
    }
    
    public function hello($id = '', $name = 'world') {
    	
//         $this->assign('name', $name);
//         return $this->fetch();
		$this->redirect('index/News/read',['id'=>5]);
    }
    
    public function test($id = '') {
        $userModel = model('User');
        $param = [
            'post_id' => rand(1, 9)
        ];
        $data = $userModel->updateDataById($param, $id);
        if (!$data) {
            $this->error($userModel->getError());
        }
        $this->success('编辑成功');
    }
    
}
