<?php
namespace app\model;

use think\Model;

class Member extends Model
{
    // 模型查詢
    public function member_find()
    {
        $find = Member::where('id', 1)->find();
        return $find;
    }
    // 模型新增
    public function member_create($data)
    {
        Member::create($data, ['type', 'city_name', 'true_name', 'sex', 'mobile', 'remark', 'head_pic', 'head_pic_path']);
    }
}
