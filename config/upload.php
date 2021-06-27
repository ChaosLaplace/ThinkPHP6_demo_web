<?php
// 上傳檔案
return [
    // 定义允许上传文件后缀的数组
    'suffix_arr' => [
        // 允许图片上传的后缀
        'image' => 'jpg,jpeg,png,bmp,gif',
        // 允许上传文件的后缀
        'file' => 'zip,gz,doc,txt,pdf,xls',
        //...
    ],
    // 定义允许上传文件大小的数组
    'size_arr' => [
        // 允许图片上传的大小
        'image' => 1024000,
        // 允许文件上传的大小
        'file' => 50,
    ],
    // 定義類型
    'type_arr' => [
        // 允许图片上传的大小
        'image' => ['image/jpeg', 'image/png', 'image/gif'],
        // 允许文件上传的大小
        'file' => '',
    ],
];
