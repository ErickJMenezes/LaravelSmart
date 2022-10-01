<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Grs extends OracleEloquent
{
    use Compoships;

    protected $table = 'grs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['grs_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
