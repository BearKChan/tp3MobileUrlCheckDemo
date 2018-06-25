<?php
/**
 * Created by PhpStorm.
 * User: Bear
 * Date: 2018/6/25
 * Time: 10:19
 */

namespace Home\Controller;
use Think\Controller;

class PublicController extends Controller{

    public function _initialize(){
        if (ismobile()) {
            //设置默认默认主题为 Mobile
            C('DEFAULT_V_LAYER','Mobile');
        }
    }
}