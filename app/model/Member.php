<?php
namespace app\model;

use think\Model;

class Member extends Model
{
    // 模型查詢
    public function member_select()
    {
        $member = Member::where('status', 0)->select();
        return $member;
    }
    // 模型新增
    public function member_create($data)
    {
        Member::create($data, ['type', 'city_name', 'true_name', 'sex', 'mobile', 'remark', 'head_pic']);
    }
    // 模型更新
    public function member_save($id)
    {
        $member = Member::where('id', $id)->find();
        $member->status = 1;
        $member->save();
    }
}
