<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Unp extends OracleEloquent
{
    use Compoships;

    protected $table = 'unp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['unp_yymm', 'unp_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function epe(): BelongsTo
    {
        return $this->belongsTo(
            Epe::class,
            ['unp_epe_cod'],
            ['epe_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['unp_str_cod'],
            ['str_cod'],
        );
    }
}
