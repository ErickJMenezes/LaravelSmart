<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hon extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hon_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['hon_usr_login_alt', 'hon_usr_login_cad'],
            ['usr_login', 'usr_login'],
        );
    }

    public function honGrupo(): BelongsTo
    {
        return $this->belongsTo(
            HonGrupo::class,
            ['hon_grupo_id'],
            ['hon_grupo_id'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['hon_aux', 'hon_med', 'hon_psv_solic'],
            ['psv_cod', 'psv_cod', 'psv_cod'],
        );
    }

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['hon_cc1', 'hon_cc2', 'hon_cc3', 'hon_cc4', 'hon_cc5', 'hon_cc6'],
            ['ccr_cod', 'ccr_cod', 'ccr_cod', 'ccr_cod', 'ccr_cod', 'ccr_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['hon_cnv_emp_cod', 'hon_emp_cod'],
            ['emp_cod', 'emp_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['hon_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['hon_tpctf', 'hon_tpctf', 'hon_ctf', 'hon_ctf'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function gmr(): BelongsTo
    {
        return $this->belongsTo(
            Gmr::class,
            ['hon_gmr_cod', 'hon_gmr_solic'],
            ['gmr_cod', 'gmr_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['hon_smk_cod', 'hon_smk_cod', 'hon_smk_tipo', 'hon_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['hon_str', 'hon_str_solic'],
            ['str_cod', 'str_cod'],
        );
    }
}
