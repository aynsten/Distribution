<?php
/**
 * 接收微信支付异步通知回调地址
 *
 * 
 * @好商城 (c) 2015-2018 33HAO Inc. (http://www.suibianlu.com)
 * @license    http://www.sui bian lu.c om
 * @link       交流群号：575710573
 * @since      好商城提供技术支持 授权请购买shopnc授权
 */
error_reporting(7);
$_GET['act']	= 'payment';
$_GET['op']		= 'wxpay_notify';
require_once(dirname(__FILE__).'/../../../index.php');
