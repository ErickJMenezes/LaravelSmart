<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwToc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dw_toc_str_cod', 'dw_toc_mmyy'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['dw_toc_str_cod'],
            ['str_cod'],
        );
    }
}
