<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;

class FrontLive extends BaseController
{
    // 熱度直播顯示成員
    public function index()
    {
        $param = $this->request->param();
        $member = [
            22 => [
                'nickname' => '11就是小ee',
                'id' => '2211yi',
                'type' => '禦姐',
                'time' => '23:00',
                'image' => '/static/front/image/149934563fa159997818320f0af91587.jpg',
            ],
            23 => [
                'nickname' => 'Cherry-郝甜',
                'id' => 'HTian520',
                'type' => '禦姐',
                'time' => '21:00',
                'image' => '/static/front/image/b30afa70ce4b038023463f7882a7356a.jpg',
            ],
            24 => [
                'nickname' => 'LY洋洋',
                'id' => '98104296',
                'type' => '音樂嘻哈',
                'time' => '11:00',
                'image' => '/static/front/image/8abe7bf0d8fa4c60e4b12057ec240531.jpg',
            ],
            25 => [
                'nickname' => '小酒窝',
                'id' => '2197511315',
                'type' => '甜美',
                'time' => '10:00',
                'image' => '/static/front/image/caa1586fcd9cc26f76c79eb18c93182f.jpg',
            ],
            26 => [
                'nickname' => '喻不二',
                'id' => '7598743',
                'type' => '甜美可愛',
                'time' => '11:00',
                'image' => '/static/front/image/497d3f5c88b18943441d5f47e1bb83bd.jpg',
            ],
            28 => [
                'nickname' => '唱将超哥NO1',
                'id' => '620238368',
                'type' => '才藝演唱',
                'time' => '12:00-14:00',
                'image' => '/static/front/image/1e58b520a0d17ed9d3a2af7968c7d666.jpg',
            ],
            29 => [
                'nickname' => '哈里王子',
                'id' => '174465614',
                'type' => '顏值擔當',
                'time' => '20:00-24:00',
                'image' => '/static/front/image/10c34f006b0a93ff61ed68872262b252.jpg',
            ],
            31 => [
                'nickname' => '乔汐CC',
                'id' => '86568295',
                'type' => '顏值性感',
                'time' => '20:00-22:00',
                'image' => '/static/front/image/975136219969c4c1cc559145bfeac278.jpg',
            ],
            33 => [
                'nickname' => '苏晨小锅',
                'id' => '690764915',
                'type' => '脫口秀 唱歌',
                'time' => '20:00-00:00',
                'image' => '/static/front/image/bd9c360592f93e65fe417030bd09b04d.jpg',
            ],
            34 => [
                'nickname' => '莹长',
                'id' => '130247097',
                'type' => '脫口秀 搞笑',
                'time' => '22:00-00:00',
                'image' => '/static/front/image/eaf272a3b8350c70522fe7625254939a.jpg',
            ],
            38 => [
                'nickname' => 'Cy姜晨奕',
                'id' => '374236708',
                'type' => '風趣幽默',
                'time' => '08:00-12:00 18:00-22:00',
                'image' => '/static/front/image/c49619188aec0969a0a0fb01028b728f.jpg',
            ],
            40 => [
                'nickname' => '彬彬大魔王',
                'id' => '145904104',
                'type' => '完美男神',
                'time' => '18:00-23:00',
                'image' => '/static/front/image/b2c0b5bfb0a0bf2223866fc5c639e55b.jpg',
            ],
            41 => [
                'nickname' => '库奇侠',
                'id' => '354488798',
                'type' => '溫柔紳士',
                'time' => '22:00-02:00',
                'image' => '/static/front/image/3de11438c17cb3ee31fe51a10b48e016.jpg',
            ],
            42 => [
                'nickname' => '三木.o',
                'id' => '379331084',
                'type' => '初戀學長 陽光帥氣',
                'time' => '21:00-24:00',
                'image' => '/static/front/image/3911205206c15e7038ec16a8962c421e.jpg',
            ],
            44 => [
                'nickname' => '尤心软',
                'id' => '283172869',
                'type' => '微笑殺手 逗比搞笑',
                'time' => '10:00-14:00',
                'image' => '/static/front/image/bbc7bd08d3c6716adc72c707271b777b.jpg',
            ],
            49 => [
                'nickname' => 'memo酱',
                'id' => '5619',
                'type' => '逗比女神',
                'time' => '10:00-13:00 17:00-21:00',
                'image' => '/static/front/image/c1f8ab2c6decdf048c000fa412daf1ae.jpg',
            ],
            51 => [
                'nickname' => '璐一',
                'id' => '3976',
                'type' => '舞蹈女神',
                'time' => '10:00-13:00 19:00-23:00',
                'image' => '/static/front/image/1b2eaf191537bdf4fb9a31c86324586e.jpg',
            ],
            53 => [
                'nickname' => '三金',
                'id' => '58346',
                'type' => '甜美少女',
                'time' => '20:00-24:00',
                'image' => '/static/front/image/8d938c8bfd76582d678d562e8d76da4a.jpg',
            ],
            55 => [
                'nickname' => '苏惟',
                'id' => '3506',
                'type' => '原創才女',
                'time' => '14:00-17:00 20:00-23:00',
                'image' => '/static/front/image/a2a219088a277689348c77e945b27b22.jpg',
            ],
            56 => [
                'nickname' => '亦笙',
                'id' => '4572',
                'type' => '甜心歌后',
                'time' => '10:00-13:00 15:00-19:00',
                'image' => '/static/front/image/b04ea6ccad2af143b92e60c19d3c6860.jpg',
            ],
            58 => [
                'nickname' => '菲菲',
                'id' => '691408429',
                'type' => '性感禦姐',
                'time' => '12:00-15:00',
                'image' => '/static/front/image/d55cd621a7e3fe376d96205ebdd3f087.jpg',
            ],
            61 => [
                'nickname' => '婷baby',
                'id' => '222816475',
                'type' => '音樂舞蹈全能禦姐',
                'time' => '10:00-17:00',
                'image' => '/static/front/image/f44b622074c24669e22e0b0b62c4f0ac.jpg',
            ],
            63 => [
                'nickname' => '小可乐',
                'id' => '572590823',
                'type' => '甜美可愛開心果',
                'time' => '17:00-22:00',
                'image' => '/static/front/image/f03335d439080bb1ff35512f181456c1.jpg',
            ],
            64 => [
                'nickname' => '小小鱼',
                'id' => '692265755',
                'type' => '性感寶貝',
                'time' => '20:00-01:00',
                'image' => '/static/front/image/6f209a4770fc6b479123a90e76ba8004.jpg',
            ],
        ];
        if ($member[$param['id']]) {
            $data = $member[$param['id']];
            View::assign($data);
            return View::fetch('../view/front/live/index.html');
        }
    }
}
