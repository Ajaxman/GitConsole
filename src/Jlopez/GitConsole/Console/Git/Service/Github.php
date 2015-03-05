<?php

namespace Jlopez\GitConsole\Console\Git\Service;

use Github\Client;

class Github
{
    public function __construct()
    {
        $client = new Client();
        $repositories = $client->api('user')->repositories('ajaxman');
        print_r($repositories);
    }
        //$client = new \Github\Client();
        //$repositories = $client->api('user')->repositories('ornicar');
} 