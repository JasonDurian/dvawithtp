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
    
    public function test() {
//         $userModel = model('User');
        $param = [
            'name'    => 'jason',
            'email'   => '824676495@qq.com',
            'website' => 'ddbookstore',
            'create_time'=> time(),
            'post_id' => rand(1, 9)
        ];
//         $data = $userModel->updateDataById($param, $id);
//         if (!$data) {
//             $this->error($userModel->getError());
//         }
//         $this->success('编辑成功');
        $userModel = db('User');
        $data = $userModel->insertGetId($param);
        if (!$data) {
            $this->error('添加失败');
        }
        $this->success('添加成功'.$data);
    }
    
}
