<?php
namespace app\controller;

use app\BaseController;
use app\model\Member;
use think\facade\View;

class Back extends BaseController
{
    // 首頁
    public function index()
    {
        return View::fetch();
    }
    // 搜尋簡歷
    public function searchprofile()
    {
        // 查詢 DB
        $member = new Member();
        $member_select = $member->member_select();

        $data = [];
        if ($member_select) {
            foreach ($member_select as $k => $v) {
                $data[] = [
                    'id' => $v['id'],
                    'type' => ($v['type'] == 0) ? '签约主播' : '短视频达人',
                    'city_name' => $v['city_name'],
                    'true_name' => $v['true_name'],
                    'sex' => ($v['sex'] == 0) ? '女' : '男',
                    'mobile' => $v['mobile'],
                    'remark' => $v['remark'],
                    'image' => '/static/upload/' . $v['head_pic'],
                    'create' => $v['create'],
                ];
            }
            View::assign('data', $data);
        }
        return View::fetch();
    }
    // 更新簡歷
    public function saveprofile()
    {
        $param = $this->request->param();

        $code = 1;
        $msg = '更新簡歷成功';
        if ($param['id']) {
            // 查詢 & 更新 DB
            $member = new Member();
            $member->member_save($param['id']);
        } else {
            $code = 0;
            $msg = '簡歷不存在 更新失敗';
        }

        $data = [
            'code' => $code,
            'msg' => $msg,
        ];
        return json($data);
    }
}
