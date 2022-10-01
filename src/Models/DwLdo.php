<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwLdo extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_ldo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_ldo_pac_sexo', 'dw_ldo_mmyy', 'dw_ldo_str_exec', 'dw_ldo_smk_cod', 'dw_ldo_psv_cod', 'dw_ldo_smk_tipo', 'dw_ldo_cnv_cod', 'dw_ldo_ctf_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dw_ldo_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['dw_ldo_ctf_cod', 'dw_ldo_ctf_cod', 'dw_ldo_smk_tipo', 'dw_ldo_smk_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['dw_ldo_psv_cod'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['dw_ldo_smk_cod', 'dw_ldo_smk_cod', 'dw_ldo_smk_tipo', 'dw_ldo_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['dw_ldo_str_exec'],
            ['str_cod'],
        );
    }
}
