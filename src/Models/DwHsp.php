<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwHsp extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_hsp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_hsp_cnv_cod', 'dw_hsp_cid_cod', 'dw_hsp_cln_cir', 'dw_hsp_sexo', 'dw_hsp_mmyy', 'dw_hsp_faixa_etaria', 'dw_hsp_smk_cod', 'dw_hsp_tp_alta', 'dw_hsp_tp_adm', 'dw_hsp_smk_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dw_hsp_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
