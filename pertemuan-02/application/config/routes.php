<?php

$route = [];

$route['default_controller'] = 'home';
$route['info/(:any)'] = 'home/info/$1';
$route['pemancing/(:num)'] = 'home/pemancing/$1';