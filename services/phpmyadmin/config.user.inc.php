<?php

/**
 * @example https://docs.phpmyadmin.net/en/latest/config.html
 */
/*mysql,mysql5 example
$cfg['blowfish_secret']='multiServerExample70518';

$i = 0;

$i++; // server 1 :
$cfg['Servers'][$i]['verbose']   = 'no1';
$cfg['Servers'][$i]['host']      = 'mysql';


$i++; // server 2 :
$cfg['Servers'][$i]['verbose']   = 'no2';
$cfg['Servers'][$i]['host']      = 'mysql5';
*/

$cfg['LoginCookieValidity'] = 1440000; // 登录有效期，秒
$cfg['MaxNavigationItems'] = 100; // 导航树每页的表数量
$cfg['MaxRows'] = 100; // 每页行数
