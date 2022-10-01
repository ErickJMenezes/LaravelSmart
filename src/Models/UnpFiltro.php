<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class UnpFiltro extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['unp_f_yymm', 'unp_f_cfo_cod', 'unp_f_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['unp_f_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['unp_f_str_cod'],
            ['str_cod'],
        );
    }
}
