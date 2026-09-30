<?php

$route = [];

$route['default_controller'] = 'home';
$route['info/(:any)'] = 'home/info/$1';
$route['perpus/(:num)'] = 'home/perpus/$1';