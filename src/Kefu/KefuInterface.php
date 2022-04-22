<?php
/**
 * Created by PhpStorm.
 * Email: liling@apache.org
 * User: lien
 * Date: 2022-04-22
 * Time: 08:21
 */

namespace Zwei\WorkWechat\Kefu;

/**
 * Interface KefuInterface
 * @package Zwei\WorkWechat\Kefu
 */
interface KefuInterface
{
    /**
     * 网页授权登录第三方连接
     * 请求方式：GET
     */
    const URL_GET_KEFU_MSG_URL = 'https://qyapi.weixin.qq.com/cgi-bin/kf/sync_msg?access_token=%s';
}