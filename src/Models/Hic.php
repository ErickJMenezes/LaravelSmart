<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hic extends OracleEloquent
{
    use Compoships;

    protected $table = 'hic';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hic_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
