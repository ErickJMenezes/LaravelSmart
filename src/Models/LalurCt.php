<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LalurCt extends OracleEloquent
{
    use Compoships;

    protected $table = 'lalur_ct';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lalur_ct_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
