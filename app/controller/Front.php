<?php
namespace app\controller;

use think\facade\View;

class Front
{
    // 首页
    public function index()
    {
        // 或者批量赋值
        // View::assign([
        //     'name' => 'ThinkPHP',
        //     'email' => 'thinkphp@qq.com',
        // ]);
        return View::fetch();
    }
    // 短视频
    public function video()
    {
        return View::fetch();
    }
    // 热度直播
    public function live()
    {
        return View::fetch();
    }
    // 网红电商
    public function market()
    {
        return View::fetch();
    }
    // 娱乐演艺
    public function entertainment()
    {
        return View::fetch();
    }
    // 商务合作
    public function cooperation()
    {
        return View::fetch();
    }
    // 关于我们
    public function about()
    {
        return View::fetch();
    }
    // 马上加入
    public function join()
    {
        return View::fetch();
    }
    // api
    public function api()
    {
        return 1;
    }
}
