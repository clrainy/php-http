<?php

use Cdyun\PhpHttp\HttpService;

$http = new HttpService();
$old = $http->getRequest('https://www.jianjiangwang.com/mpi/system/config');
$old = json_decode($old, true);
print_r($old);
echo 1;