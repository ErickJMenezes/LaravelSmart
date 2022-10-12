<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dpr extends OracleEloquent
{
    use Compoships;

    protected $table = 'dpr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dpr_cod', 'dpr_int_bko_codigo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function intBko(): BelongsTo
    {
        return $this->belongsTo(
            IntBko::class,
            ['dpr_int_bko_codigo'],
            ['int_bko_codigo'],
        );
    }
}
