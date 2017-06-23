<?php

/*
 * This file is part of Laravel Vimeo.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Vimeo Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'client_id' => 'a093c6b1641ff90baf7d164ac28ba834711c7ab9',
            'client_secret' => 'XNnx1LHBOm9lOiOXbj81MIoL/0y6eey0Ue6k7/NvmFEn1cQox8GRRe1B+bOexH7cRrpKdIvr5jbG3cB63ucP6Yoqci4P9Pq1xjpbiM4FQMfEpK1jo+RMlxKckHPpbqJL',
            'access_token' => null,
        ],

        'alternative' => [
            'client_id' => 'your-client-id',
            'client_secret' => 'your-client-secret',
            'access_token' => null,
        ],

    ],

];
