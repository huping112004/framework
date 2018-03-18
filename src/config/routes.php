<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/15
 * Time: 12:13
 */
use NoahBuscher\Macaw\Macaw;
Macaw::get('demo.php/page', function() {
    echo "Welcome";
});

Macaw::get('/name/(:all)', function($name) {
    echo 'Your name is '.$name;
});



Macaw::dispatch();
