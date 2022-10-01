<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwPac extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dw_pac_cnv_cod', 'dw_pac_mmyy', 'dw_pac_str_unidade', 'dw_pac_sexo', 'dw_pac_faixa_etaria'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dw_pac_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
