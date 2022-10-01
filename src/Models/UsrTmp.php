<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class UsrTmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'usr_tmp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
