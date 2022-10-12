<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BcsSubesp extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcs_subesp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcs_subesp_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
