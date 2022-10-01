<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lmc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lmc_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['lmc_cde_cod'],
            ['cde_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['lmc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['lmc_ctf_cod', 'lmc_ctf_cod', 'lmc_ctf_tipo', 'lmc_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['lmc_emp_cod'],
            ['emp_cod'],
        );
    }

    public function gsv(): BelongsTo
    {
        return $this->belongsTo(
            Gsv::class,
            ['lmc_gsv_cod'],
            ['gsv_cod'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['lmc_loc_cod'],
            ['loc_cod'],
        );
    }

    public function pln(): BelongsTo
    {
        return $this->belongsTo(
            Pln::class,
            ['lmc_pln_cod', 'lmc_pln_cod', 'lmc_cnv_cod', 'lmc_cnv_cod'],
            ['pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['lmc_psv_cod'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['lmc_smk_cod', 'lmc_smk_cod', 'lmc_smk_tipo', 'lmc_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['lmc_str_exe', 'lmc_str_cod'],
            ['str_cod', 'str_cod'],
        );
    }

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['lmc_esp_cod'],
            ['esp_cod'],
        );
    }
}
