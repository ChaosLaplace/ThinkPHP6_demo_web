<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

// 前台
Route::get('/', 'front/index'); // 首页
Route::get('/video', 'front/video'); // 短视频
Route::get('/live', 'front/live'); // 热度直播
Route::get('/market', 'front/market'); // 网红电商
Route::get('/entertainment', 'front/entertainment'); // 娱乐演艺
Route::get('/cooperation', 'front/cooperation'); // 商务合作
Route::get('/about', 'front/about'); // 关于我们
Route::get('/join', 'front/join'); // 马上加入

// 後台
Route::get('/back', 'back/index');
