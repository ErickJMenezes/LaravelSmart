<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DafEvento extends OracleEloquent
{
    use Compoships;

    protected $table = 'daf_evento';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['daf_e_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
