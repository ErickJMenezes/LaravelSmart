<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class UsrBookmark extends OracleEloquent
{
    use Compoships;

    protected $table = 'usr_bookmark';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['usr_b_pagina', 'usr_b_usr_login'];

    protected $connection = 'smart';

    protected $guarded = [];
}
