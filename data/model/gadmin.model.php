<?php
/**
 * 管理员权限组
 *
 *
 *
 * * @好商城 (c) 2015-2018 33HAO Inc. (http://www.suibianlu.com)
 * @license    http://www.sui bian lu.c om
 * @link       交流群号：575710573
 * @since      好商城提供技术支持 授权请购买shopnc授权
 */
defined('In33hao') or exit('Access Invalid!');
class gadminModel extends Model{
    public function __construct() {
        parent::__construct('gadmin');
    }

    /**
     * 根据id查询后台管理员权限组
     * @param int $id
     * @return array
     */
    public function getGadminInfoById($id) {
        return $this->where(array('gid' => $id))->find();
    }
}
