<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;

class FrontVideo extends BaseController
{
    // 熱度直播顯示成員
    public function index()
    {
        $param = $this->request->param();
        $member = [
            1 => [
                'nickname' => '花一村',
                'fans' => '1138.7w+',
                'great_all' => '1.6亿+',
                'great_one' => '594.5w+',
                'content' => [
                    '确认过眼神，是有趣的灵魂，每天中午12点更新~',
                ],
                'image' => '/static/front/image/80dd96f082ff45ef80716de0905410b4.png',
                'video' => [
                    '/static/front/video/20190822185447_.mp4',
                    '/static/front/video/20190822185600_.mp4',
                    '/static/front/video/20190822185653_.mp4',
                    '/static/front/video/20190822185831_.mp4',
                ],
            ],
            10 => [
                'nickname' => '王逗逗',
                'fans' => '660.0w+',
                'great_all' => '4674.8w+',
                'great_one' => '218.6w+',
                'content' => [
                    'weibo：王逗逗的小時候',
                    '商v：ruduredu88',
                    '美：18118800000',
                ],
                'image' => '/static/front/image/87f09608a6eab265e8a82b40e180328a.png',
                'video' => [
                    '/static/front/video/20190822184852_.mp4',
                    '/static/front/video/20190822184925_.mp4',
                    '/static/front/video/20190822185244_.mp4',
                    '/static/front/video/20190822185327_.mp4',
                ],
            ],
            6 => [
                'nickname' => '打碗哥',
                'fans' => '590.9w+',
                'great_all' => '1952.5w+',
                'great_one' => '150.4w+',
                'content' => [
                    '全網“打碗”第一人',
                    '參加過：中央3（綜藝盛典）（黃金100秒）',
                    '中央7（為你點贊）',
                    '山東V視（我是大明星）',
                    '山東經濟生活頻道（歡樂星期天）',
                    '我的夢想：吧音樂的快樂，分享給更多的人...',
                    '合作：reduredu88',
                ],
                'image' => '/static/front/image/ea44c778066393b367b4cdc933db887a.png',
                'video' => [
                    '/static/front/video/20190822192640_.mp4',
                    '/static/front/video/20190822192334_.mp4',
                    '/static/front/video/20190822192145_.mp4',
                    '/static/front/video/20190822192117_.mp4',
                ],
            ],
            9 => [
                'nickname' => '猫七',
                'fans' => '456.7w+',
                'great_all' => '3338.6w+',
                'great_one' => '87.0w+',
                'content' => [
                    '吃雞：Zheng887766554433',
                    '合作：reduredu88',
                    '靈魂歌手貓七',
                ],
                'image' => '/static/front/image/2068a06eca7fb8cfad3d4174f3b555ee.png',
                'video' => [
                    '/static/front/video/20190822192057_.mp4',
                    '/static/front/video/20190822192028_.mp4',
                    '/static/front/video/20190822191519_.mp4',
                    '/static/front/video/20190822191343_.mp4',
                ],
            ],
            5 => [
                'nickname' => '尘世美',
                'fans' => '322.5w+',
                'great_all' => '63.2w+',
                'great_one' => '27.5w+',
                'content' => [
                    'Wb:鄭立洪LP, 努力堅持',
                ],
                'image' => '/static/front/image/9774773ea713ff5e324896818690f5e1.png',
                'video' => [
                    '/static/front/video/20190830181156_.mp4',
                    '/static/front/video/20190830181059_.mp4',
                    '/static/front/video/20190830181043_.mp4',
                    '/static/front/video/20190822192324_.mp4',
                ],
            ],
            2 => [
                'nickname' => 'Gary成旭',
                'fans' => '293.6w+',
                'great_all' => '4638.0w+',
                'great_one' => '65.0w+',
                'content' => [
                    '下午5.30左右直播',
                ],
                'image' => '/static/front/image/1bf0b930b0a5356fbb30e1f4352ea228.png',
                'video' => [
                    '/static/front/video/20190822185604_.mp4',
                    '/static/front/video/20190822185638_.mp4',
                    '/static/front/video/20190822185653_.mp4',
                    '/static/front/video/20190822185721_.mp4',
                ],
            ],
            126 => [
                'nickname' => '因为我是婉瑜呀',
                'fans' => '236.3W',
                'great_all' => '1972.2W',
                'great_one' => '119.1W',
                'content' => [
                    'VB:婉瑜小仙女',
                    '商務VX:redu66',
                ],
                'image' => '/static/front/image/c0f3fa3e66a19bd667fea603955bfe3a.jpg',
                'video' => [
                    '/static/front/video/20191205184355_.mp4',
                    '/static/front/video/20191205184351_.mp4',
                    '/static/front/video/20191205184346_.mp4',
                ],
            ],
            3 => [
                'nickname' => 'panadol雅哥',
                'fans' => '314.6w+',
                'great_all' => '3316.0w+',
                'great_one' => '65.2w+',
                'content' => [
                    '百變如我，不定時直播❤',
                ],
                'image' => '/static/front/image/9b64d9781804673d0e47643b939accaa.png',
                'video' => [
                    '/static/front/video/20190822192827_.mp4',
                    '/static/front/video/20190822192813_.mp4',
                    '/static/front/video/20190822192812_.mp4',
                    '/static/front/video/20190822192734_.mp4',
                ],
            ],
            4 => [
                'nickname' => '安妮婷婷',
                'fans' => '263.1w+',
                'great_all' => '1435.3w+',
                'great_one' => '47.8w+',
                'content' => [
                    '圍脖：安妮婷婷Anne',
                ],
                'image' => '/static/front/image/1b8234607e9a467bacac4649a0214273.png',
                'video' => [
                    '/static/front/video/20190822192719_.mp4',
                    '/static/front/video/20190822192612_.mp4',
                    '/static/front/video/20190822192542_.mp4',
                    '/static/front/video/20190822192532_.mp4',
                ],
            ],
            7 => [
                'nickname' => '高压郭',
                'fans' => '272.6w+',
                'great_all' => '3934.5w+',
                'great_one' => '341.8w+',
                'content' => [
                    '我不是網紅，我只是快樂的搬運工。',
                    '合作：reduredu88',
                    '一般是周4/5/6更新呦...',
                ],
                'image' => '/static/front/image/db04b70d1a02808cdc2ca99bc27036e6.png',
                'video' => [
                    '/static/front/video/20190822192210_.mp4',
                    '/static/front/video/20190822191843_.mp4',
                    '/static/front/video/20190822191805_.mp4',
                    '/static/front/video/20190822191757_.mp4',
                ],
            ],
            8 => [
                'nickname' => '海哥说车',
                'fans' => '391.3w+',
                'great_all' => '148.9w+',
                'great_one' => '89.2w+',
                'content' => [
                    '每天更新選車用車相關汽車知識！',
                    '每天22點直播',
                    '私信盡力回...',
                ],
                'image' => '/static/front/image/a5b0b65462da695c20369bdfe4b7d71a.png',
                'video' => [
                    '/static/front/video/20190822185343_.mp4',
                    '/static/front/video/20190822185052_.mp4',
                    '/static/front/video/20190822185141_.mp4',
                    '/static/front/video/20190822185324_.mp4',
                ],
            ],
            102 => [
                'nickname' => '李承灿',
                'fans' => '183.2w+',
                'great_all' => '1473.3w+',
                'great_one' => '43.4w+',
                'content' => [
                    '人生短短數十載，最要緊的是證明自己，不是討好他人。',
                    '商務v：redu04(備註來意)',
                ],
                'image' => '/static/front/image/c39ec3055036ad3e1cf28960ad66bb0c.png',
                'video' => [
                    '/static/front/video/20190830182406_.mp4',
                    '/static/front/video/20190830182400_.mp4',
                    '/static/front/video/20190830182244_.mp4',
                    '/static/front/video/20190830182238_.mp4',
                ],
            ],
            104 => [
                'nickname' => '这个初夏有点萌',
                'fans' => '175.8w+',
                'great_all' => '1084.6w+',
                'great_one' => '125.9w+',
                'content' => [
                    '每晚十點直播，合作請私信',
                ],
                'image' => '/static/front/image/0dd682f4d111b9077a258c2a6fb0ac7e.png',
                'video' => [
                    '/static/front/video/20190830183054_.mp4',
                    '/static/front/video/20190830182934_.mp4',
                    '/static/front/video/20190830182748_.mp4',
                    '/static/front/video/20190830182742_.mp4',
                ],
            ],
            106 => [
                'nickname' => '张培猪',
                'fans' => '135.6w+',
                'great_all' => '1903.5w+',
                'great_one' => '59.8w+',
                'content' => [
                    '承蒙各位表麵粉絲的厚愛',
                    '商v：reduredu88',
                ],
                'image' => '/static/front/image/3d21de4085480bff0406db0a94cd0ba3.png',
                'video' => [
                    '/static/front/video/20190830183315_.mp4',
                    '/static/front/video/20190830183228_.mp4',
                    '/static/front/video/20190830183215_.mp4',
                    '/static/front/video/20190830183206_.mp4',
                ],
            ],
            108 => [
                'nickname' => '李政廷（ting）',
                'fans' => '143.7w+',
                'great_all' => '1528.6w+',
                'great_one' => '16.0w+',
                'content' => [
                    '圍脖：李政廷不是李政廷',
                ],
                'image' => '/static/front/image/2bda20907e6a17bb13948819e3e68ad0.png',
                'video' => [
                    '/static/front/video/20190830183726_.mp4',
                    '/static/front/video/20190830183624_.mp4',
                ],
            ],
            110 => [
                'nickname' => '小三金',
                'fans' => '220.3w+',
                'great_all' => '2014.2w+',
                'great_one' => '258.2w+',
                'content' => [
                    '小三金呀',
                ],
                'image' => '/static/front/image/b72cdfcf177522bc48905620d3275a82.png',
                'video' => [
                    '/static/front/video/20190830184158_.mp4',
                    '/static/front/video/20190830184154_.mp4',
                    '/static/front/video/20190830184049_.mp4',
                    '/static/front/video/20190830184047_.mp4',
                ],
            ],
            111 => [
                'nickname' => '苗条的李富贵',
                'fans' => '127.3w+',
                'great_all' => '1033.9w+',
                'great_one' => '9.6w+',
                'content' => [
                    '英牛：李富貴',
                    '臘腸：李來福',
                ],
                'image' => '/static/front/image/03c00491c577e913f141f5fbe940dded.png',
                'video' => [
                    '/static/front/video/20190830184251_.mp4',
                    '/static/front/video/20190830184156_.mp4',
                    '/static/front/video/20190830184116_.mp4',
                ],
            ],
            114 => [
                'nickname' => '耿婷poppy',
                'fans' => '127.2w+',
                'great_all' => '411.3w+',
                'great_one' => '97.1w+',
                'content' => [
                    ' vb：耿婷poppy',
                ],
                'image' => '/static/front/image/4c4fb368d687b27c36c6a2d96d9cbf6e.png',
                'video' => [
                    '/static/front/video/20190830184701_.mp4',
                    '/static/front/video/20190830184645_.mp4',
                    '/static/front/video/20190830184641_.mp4',
                    '/static/front/video/20190830184525_.mp4',
                ],
            ],
            116 => [
                'nickname' => '陆柒',
                'fans' => '118.9w+',
                'great_all' => '1102.1w+',
                'great_one' => '67.1w+',
                'content' => [
                    '愛生活博愛你們博愛的美術博主',
                ],
                'image' => '/static/front/image/9404b9e117c5b176740de46c428be452.png',
                'video' => [
                    '/static/front/video/20190830185234_.mp4',
                    '/static/front/video/20190830185156_.mp4',
                    '/static/front/video/20190830185100_.mp4',
                    '/static/front/video/20190830185058_.mp4',
                ],
            ],
            121 => [
                'nickname' => '美月酱在日本',
                'fans' => '93.5W',
                'great_all' => '479.1W',
                'great_one' => '29W',
                'content' => [
                    '日本生活方式博主',
                    '合作VX：asia_2014',
                ],
                'image' => '/static/front/image/568c1be439511e33231330e9ad11fef4.jpg',
                'video' => [
                    '/static/front/video/20191205181157_.mp4',
                    '/static/front/video/20191205181145_.mp4',
                ],
            ],
            122 => [
                'nickname' => '常乐晨',
                'fans' => '256.8W',
                'great_all' => '2410.2W',
                'great_one' => '238.3W',
                'content' => [
                    '前北京首鋼隊成員',
                    '國內知名籃球訓練師',
                    '商務VX：reduredu88',
                ],
                'image' => '/static/front/image/07bf1ddd328095c9cf59f599af8d2ac7.jpg',
                'video' => [
                    '/static/front/video/20191205180812_.mp4',
                    '/static/front/video/20191205180749_.mp4',
                ],
            ],
            123 => [
                'nickname' => '糖逗儿',
                'fans' => '197.2W',
                'great_all' => '2796.6W',
                'great_one' => '240.9W',
                'content' => [
                    '粉絲群：783243014',
                    '商務VX：529620487',
                ],
                'image' => '/static/front/image/a8221b849bc2f1a43db5e6d59101bf2c.jpg',
                'video' => [
                    '/static/front/video/20191205181950_.mp4',
                    '/static/front/video/20191205181948_.mp4',
                    '/static/front/video/20191205181944_.mp4',
                ],
            ],
            124 => [
                'nickname' => 'MR丞',
                'fans' => '125.8W',
                'great_all' => '1807.9W',
                'great_one' => '149.5W',
                'content' => [
                    '狂野滷蛋在線抽風',
                    '微博：MR丞是滷蛋',
                    '承蒙厚愛，不勝感激',
                ],
                'image' => '/static/front/image/7149063f41f03139bda2b422f408f954.jpg',
                'video' => [
                    '/static/front/video/20191205182439_.mp4',
                    '/static/front/video/20191205182438_.mp4',
                    '/static/front/video/20191205182437_.mp4',
                ],
            ],
            125 => [
                'nickname' => '孙祖君',
                'fans' => '111.6W',
                'great_all' => '742.2W',
                'great_one' => '171W',
                'content' => [
                    '演員',
                ],
                'image' => '/static/front/image/eb4e726a1ddab369f257804fdab4444e.jpg',
                'video' => [
                    '/static/front/video/20191205182839_.mp4',
                    '/static/front/video/20191205182838_.mp4',
                    '/static/front/video/20191205182836_.mp4',
                ],
            ],
            127 => [
                'nickname' => '羚彦加油站',
                'fans' => '385.2W',
                'great_all' => '5043W',
                'great_one' => '263.4W',
                'content' => [
                    '為你打氣加油的加油站',
                    '開心的鼓舞的統統送給你們',
                ],
                'image' => '/static/front/image/589fa06fdca0df76d2c1abbb4baee15c.jpg',
                'video' => [
                    '/static/front/video/20191205185913_.mp4',
                    '/static/front/video/20191205185912_.mp4',
                    '/static/front/video/20191205185911_.mp4',
                ],
            ],
        ];
        if ($member[$param['id']]) {
            $data = $member[$param['id']];
            View::assign($data);
            return View::fetch('../view/front/video/index.html');
        }
    }
}
