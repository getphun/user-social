<?php
/**
 * user-social config file
 * @package user-social
 * @version 0.0.1
 * @upgrade true
 */

return [
    '__name' => 'user-social',
    '__version' => '0.0.1',
    '__git' => 'https://github.com/getphun/user-social',
    '__files' => [
        'modules/user-social' => [
            'install',
            'remove',
            'update'
        ]
    ],
    '__dependencies' => [
        'user'
    ],
    '_services' => [],
    '_autoload' => [
        'classes' => [
            'UserSocial\\Model\\UserSocial' => 'modules/user-social/model/UserSocial.php'
        ],
        'files' => []
    ]
];