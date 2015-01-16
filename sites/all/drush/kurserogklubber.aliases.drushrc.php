<?php

$aliases['common'] = array(
    'uri' => 'default',
    'remote-host' => '193.88.99.22',
    'remote-user' => 'cobook',
);

$aliases['prod'] = array(
    'parent' => '@common',
    'root' => '/var/www/vhosts/kurserogklubber.dk/httpdocs',
);
