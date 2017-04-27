<?php

namespace app\index\controller;


use app\common\controller\Common;
// use think\Request;

class Blog extends Common
{
    protected $userModel;
    
    protected function _initialize()
    {
        parent::_initialize();
        $this->userModel = model('User');
    }
    
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $keywords = !empty($this->param['keywords']) ? $this->param['keywords']: '';
        $page = !empty($this->param['page']) ? $this->param['page']: '';
        $limit = !empty($this->param['limit']) ? $this->param['limit']: '';    
        $data = $this->userModel->getDataList($keywords, $page, $limit);
        return resultArray(['data' => $data]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save()
    {
        
        $data = $this->userModel->createData($this->param);
        if (!$data) {
            return resultArray(['error' => $this->userModel->getError()]);
        }
        
        return resultArray(['data' => '添加成功']);
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        return resultArray(['data' => $id]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update($id)
    {
        $data = $this->userModel->updateDataById($this->param, $id);
        if (!$data) {
            return resultArray(['error' => $this->userModel->getError()]);
        } 
        return resultArray(['data' => '编辑成功']);
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        $data = $this->userModel->delDataById($id);       
        if (!$data) {
            return resultArray(['error' => $this->userModel->getError()]);
        } 
        return resultArray(['data' => '删除成功']);
    }
}
