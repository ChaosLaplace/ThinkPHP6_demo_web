<?php
namespace app\controller;

use think\facade\View;

class Back
{
    public function index()
    {
        // 或者批量赋值
        // View::assign([
        //     'name' => 'ThinkPHP',
        //     'email' => 'thinkphp@qq.com',
        // ]);
        // 模板输出
        return View::fetch();
    }
}
