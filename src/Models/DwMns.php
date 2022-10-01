<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwMns extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_mns';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_mns_caixa_fatura', 'dw_mns_tipo_mov', 'dw_mns_gcc_cod', 'dw_mns_mog_cod', 'dw_mns_str_exec', 'dw_mns_nfs_tipo', 'dw_mns_mmyy_atend', 'dw_mns_cnv_cod', 'dw_mns_str_solic', 'dw_mns_mmyy', 'dw_mns_mmyy_emissao', 'dw_mns_origem'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dw_mns_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['dw_mns_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function mog(): BelongsTo
    {
        return $this->belongsTo(
            Mog::class,
            ['dw_mns_mog_cod'],
            ['mog_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['dw_mns_str_exec', 'dw_mns_str_solic'],
            ['str_cod', 'str_cod'],
        );
    }
}
