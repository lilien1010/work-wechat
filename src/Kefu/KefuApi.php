<?php
/**
 * Created by PhpStorm.
 * Email: liling@apache.org
 * User: lien
 * Date: 2022-04-22
 * Time: 08:21
 */

namespace Zwei\WorkWechat\kefu;


use Zwei\WorkWechat\ApiBase;
use Zwei\WorkWechat\Exceptions\WorkWechatApiErrorCodeException;
use Zwei\WorkWechat\Helpers\CommonHelper;

class KefuApi extends ApiBase implements KefuInterface
{

    /**
     * @inheritdoc
     */
    public function getKefuMsg($accessToken, $token, $cursor = '',$limit = 1000)
    {
        $data = [ 
            "cursor"=> $cursor,
            "token"=> $token,
            "limit"=> $limit,
            "voice_format"=> 0,
        ]; 
        $url = sprintf(self::URL_GET_KEFU_MSG_URL, $accessToken);
        $response = $this->client->request('POST', $url, [
            'verify' => $this->sslVerify,
            'multipart' => $data,
        ]);
        return $this->parseApiResult($response);
    }

}