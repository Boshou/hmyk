<?php

namespace app\api\controller;

use app\common\controller\Api;

/**
 * 首页接口
 */
class Index extends Api {
    protected $noNeedLogin = ['*'];
    protected $noNeedRight = ['*'];

    /**
     * 首页
     *
     */
    public function indexs()
    {
echo 1;die;
        echo '{"code":1,"msg":"","time":1655450995,"data":{"site_name":"BuildAdmin","record_number":"渝ICP备8888888号-1"}}';die;
        $this->success('请求成功');
    }
}
