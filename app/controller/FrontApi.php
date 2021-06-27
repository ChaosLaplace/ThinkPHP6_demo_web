<?php
namespace app\controller;

use app\BaseController;
use app\model\Member;
use think\facade\Config;

class FrontApi extends BaseController
{
    // 马上加入 api
    public function join()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $files = $_FILES['head_pic'];
        $msg = '提交成功，请等待客服人员电话联系！';
        $code = 0;
        
        if (!$files['error']) {
            $upload = Config::get('upload');
            // 判斷上傳文件類型且大小不超過1024000B
            if ((in_array($files['type'], $upload['type_arr']['image'])) && $files['size'] < $upload['size_arr']['image']) {
                // 防止文件名重複
                $file_path = $_SERVER['DOCUMENT_ROOT'] . '/static/upload/';
                $file_name = time() . $files['name'];
                $file = $file_path . $file_name;
                // 檢查文件或目錄是否存在
                if (!file_exists($file_name) && mb_strlen($file_name, 'utf-8') <= 50) {
                    // 將臨時地址移動到指定地址
                    $res = move_uploaded_file($files['tmp_name'], $file);
                    if ($res) {
                        $param = $this->request->param();
                        $data = [
                            'type' => $param['type'],
                            'city_name' => $param['city_name'],
                            'true_name' => $param['true_name'],
                            'sex' => $param['sex'],
                            'mobile' => $param['mobile'],
                            'remark' => $param['remark'],
                            'head_pic' => $file_name,
                            'head_pic_path' => $file_path,
                        ];
                        // 寫入DB
                        $member = new Member();
                        $member->member_create($data);

                        $code = 1;
                    } else {
                        $msg = $files['name'] . ' 檔案上傳失敗';
                    }
                } else {
                    $msg = $files['name'] . ' 檔案已經存在或檔案名稱太長';
                }
            } else {
                $msg = '文件類型或檔案大小不符';
            }
        } else {
            $msg = '未上傳成功';
        }

        $result = [
            'msg' => $msg,
            'code' => $code,
        ];
        return json($result);
    }
}
