<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CnvStr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cnv_s_cnv_cod', 'cnv_s_str_solic'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cnv_s_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cnv_s_str_solic', 'cnv_s_str_destino'],
            ['str_cod', 'str_cod'],
        );
    }
}
