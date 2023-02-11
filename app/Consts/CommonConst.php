<?php

namespace App\Consts;

class CommonConst
{
    /**
     * お知らせカテゴリ
     *
     * @param array
     */
    const GENDER_LIST = [
        1 => '男性',
        2 => '女性'
    ];

    const ROLE_LIST = [
        'SYSTEM_ADMIN' => 0,
        'SITE_ADMIN' => 1,
        'GENERAL_USER' => 2,
    ];
}
