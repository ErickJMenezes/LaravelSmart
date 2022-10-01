<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwCrg extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_crg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_crg_faixa_etaria', 'dw_crg_smk_tipo', 'dw_crg_cnv_cod', 'dw_crg_pac_sexo', 'dw_crg_str_solic', 'dw_crg_porte', 'dw_crg_duracao', 'dw_crg_psv_cod', 'dw_crg_psv_solic', 'dw_crg_smk_cod', 'dw_crg_ctf_cod', 'dw_crg_mmyy'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dw_crg_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['dw_crg_ctf_cod', 'dw_crg_ctf_cod', 'dw_crg_smk_tipo', 'dw_crg_smk_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['dw_crg_psv_cod'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['dw_crg_smk_cod', 'dw_crg_smk_cod', 'dw_crg_smk_tipo', 'dw_crg_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
