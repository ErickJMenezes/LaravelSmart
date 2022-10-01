<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bai extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['bai_cod', 'bai_cde_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['bai_cde_cod'],
            ['cde_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['bai_str_cod'],
            ['str_cod'],
        );
    }
}
