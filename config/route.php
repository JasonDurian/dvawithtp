<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
// 	'__domain__'  =>[					//子域名绑定
// 		'new'  => 'News',
// 	],
	// 定义资源路由
// 	'__rest__'	  => [
// 		// 指向index模块的blog控制器
// 		'blog'	=> 'index/blog',
// 	],
    '__pattern__' => [
        'name' 	=> '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
//     'new/:id'	=> ['index/News/read',['method' => 'get']],
//     '__miss__'  => 'Miss/index',		//当不匹配路由规则时都显示此页面

];

// use think\Route;
// // 注册路由到index模块的News控制器的read操作
// Route::get(['new/:id'=>'News/read','blog/:name'=>'Blog/detail']);
