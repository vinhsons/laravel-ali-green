<?php
/**
 * This file is part of PHP CS Fixer.
 *
 * (c) vinhson <15227736751@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
return [
    /*
     * 阿里云 accessKeyId
     */
    'accessKeyId' => '******',

    /*
     * 阿里云 accessKeySecret
     */
    'accessKeySecret' => '******',

    /**
     * 文字图片--支持的场景有：porn（色情）、terrorism（暴恐）、qrcode（二维码）、ad（图片广告）、 ocr（文字识别）
     *
     * 视频（阿里云收费）--支持的场景有：porn（色情）、terrorism（暴恐涉政视频）、logo（带有logo的视频）、ad（包含广告的视频）
     * 视频检测是异步接口，提交视频检测后需要等待5-10后自行请求查询视频异步检测结果
     *
     * 收费详情: @see https://www.aliyun.com/price/product/?spm=a2c4g.11186623.2.17.5c712bd7uol5ye#lvwang/detail
     */
    'scenes' => ['ad', 'porn', 'terrorism', 'qrcode'],

    /*
     *  地区 上海
     */
    'region' => 'cn-shanghai',

    /*
     * 自定义 text 内容
     */
    'content' => [
        'cnm',
    ]
];
