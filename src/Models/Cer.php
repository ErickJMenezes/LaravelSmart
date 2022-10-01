<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cer extends OracleEloquent
{
    use Compoships;

    protected $table = 'cer';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cer_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
