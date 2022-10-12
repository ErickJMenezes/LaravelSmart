<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bco extends OracleEloquent
{
    use Compoships;

    protected $table = 'bco';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bco_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nwa(): BelongsTo
    {
        return $this->belongsTo(
            Nwa::class,
            ['bco_nwa_id'],
            ['nwa_id'],
        );
    }
}
