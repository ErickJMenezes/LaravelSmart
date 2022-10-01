<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Eso extends OracleEloquent
{
    use Compoships;

    protected $table = 'eso';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['eso_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
