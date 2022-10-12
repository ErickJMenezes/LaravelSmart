<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SEtnia extends OracleEloquent
{
    use Compoships;

    protected $table = 's_etnia';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['s_etnia_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
