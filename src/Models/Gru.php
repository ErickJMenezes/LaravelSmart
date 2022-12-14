<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gru extends OracleEloquent
{
    use Compoships;

    protected $table = 'gru';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gru_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
