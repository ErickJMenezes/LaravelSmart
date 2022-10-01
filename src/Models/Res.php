<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Res extends OracleEloquent
{
    use Compoships;

    protected $table = 'res';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['res_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dce(): BelongsTo
    {
        return $this->belongsTo(
            Dce::class,
            ['res_dce_id'],
            ['dce_id'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['res_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['res_ctf_cod', 'res_ctf_cod', 'res_ctf_tipo', 'res_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['res_lta_cod'],
            ['lta_cod'],
        );
    }

    public function pln(): BelongsTo
    {
        return $this->belongsTo(
            Pln::class,
            ['res_pln_cod', 'res_pln_cod', 'res_pln_cnv_cod', 'res_pln_cnv_cod'],
            ['pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['res_psv_cod'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['res_smk_cod', 'res_smk_cod', 'res_smk_tipo', 'res_smk_tipo', 'res_smk_cod_alter', 'res_smk_cod_alter', 'res_smk_tipo_alter', 'res_smk_tipo_alter'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['res_str_solic'],
            ['str_cod'],
        );
    }
}
