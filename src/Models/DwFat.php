<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwFat extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dw_fat_str_solic', 'dw_fat_mmyy_venc', 'dw_fat_origem', 'dw_fat_gcc_cod', 'dw_fat_cnv_cod', 'dw_fat_str_exec', 'dw_fat_tipo', 'dw_fat_mmyy', 'dw_fat_mmyy_atend'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dw_fat_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['dw_fat_str_exec', 'dw_fat_str_solic'],
            ['str_cod', 'str_cod'],
        );
    }
}
