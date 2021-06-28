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
Route::get('/', 'front/index'); // 首頁

Route::get('/video', 'front/video'); // 短視頻
Route::get('/videomember', 'FrontVideo/index'); // 短視頻顯示成員

Route::get('/live', 'front/live'); // 熱度直播
Route::get('/livemember', 'frontlive/index'); // 熱度直播顯示成員

Route::get('/market', 'front/market'); // 網紅店商
Route::get('/entertainment', 'front/entertainment'); // 娛樂演藝
Route::get('/cooperation', 'front/cooperation'); // 商務合作
Route::get('/about', 'front/about'); // 關於我們
Route::get('/join', 'front/join'); // 馬上加入
Route::get('/api', 'front/api'); // api

// 後台
Route::get('/back', 'back/index');
