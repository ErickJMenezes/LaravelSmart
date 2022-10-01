<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GccEnc extends OracleEloquent
{
    use Compoships;

    protected $table = 'gcc_enc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gcc_e_cod_origem', 'gcc_e_cod_pagante'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
