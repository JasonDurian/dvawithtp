<?php
// +----------------------------------------------------------------------
// | Description: 解决跨域问题
// +----------------------------------------------------------------------
// | Author: linchuangbin <linchuangbin@honraytech.com>
// +----------------------------------------------------------------------

namespace app\common\controller;

use think\Controller;

class ApiCommon extends Controller
{
    public $param;
    protected $header = [];
    
    public function _initialize()
    {
        parent::_initialize();
        /*防止跨域*/      
        $header [] = 'Access-Control-Allow-Origin: *';
        $header [] = 'Access-Control-Allow-Credentials: true';
        $header [] = 'Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS';
        $header [] = 'Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, authKey, sessionId';
        $this->header = $header;
//         $param =  Request::instance()->param();            
//         $this->param = $param;
    }

    public function object_array($array) 
    {  
        if (is_object($array)) {  
            $array = (array)$array;  
        } 
        if (is_array($array)) {  
            foreach ($array as $key=>$value) {  
                $array[$key] = $this->object_array($value);  
            }  
        }  
        return $array;  
    }
}
 