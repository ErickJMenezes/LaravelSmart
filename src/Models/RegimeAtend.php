<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RegimeAtend extends OracleEloquent
{
    use Compoships;

    protected $table = 'regime_atend';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['regime_atend_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
