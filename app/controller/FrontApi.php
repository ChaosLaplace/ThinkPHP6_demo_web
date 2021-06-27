<?php
namespace app\controller;

use app\BaseController;
use think\facade\Config;

class FrontApi extends BaseController
{
    // 马上加入 api
    public function join()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $files = $_FILES['head_pic'];
        $upload = Config::get('upload');
        $res = null;
        $msg = '提交成功，请等待客服人员电话联系！';
        $code = 0;
        $filename = null;

        if (!$files['error']) {
            // 判斷上傳文件類型且大小不超過1024000B
            if ((in_array($files['type'], $upload['type_arr']['image'])) && $files['size'] < $upload['size_arr']['image']) {
                // 防止文件名重複
                $time = time();
                $filename = $_SERVER['DOCUMENT_ROOT'] . '/static/upload/' . $time . $files['name'];
                // 檢查文件或目錄是否存在
                if (!file_exists($filename)) {
                    // 將臨時地址移動到指定地址
                    $res = move_uploaded_file($files['tmp_name'], $filename);
                    if ($res) {
                        // 寫入DB

                        $code = 1;
                    } else {
                        $msg = $files['name'] . ' 檔案上傳失敗';
                    }
                } else {
                    $msg = $files['name'] . ' 檔案已經存在';
                }
            } else {
                $msg = '文件類型或檔案大小不符';
            }
        } else {
            $msg = 'file error!!';
        }

        $result = [
            'files' => $files,
            'param' => $this->request->param(),
            'msg' => $msg,
            'code' => $code,
        ];
        return json($result);
    }
}
