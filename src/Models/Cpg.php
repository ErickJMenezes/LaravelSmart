<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cpg extends OracleEloquent
{
    use Compoships;

    protected $table = 'cpg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cpg_num', 'cpg_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['cpg_cct_cod_passivo'],
            ['cct_cod'],
        );
    }

    public function cpgs(): HasMany
    {
        return $this->hasMany(
            Cpg::class,
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
            ['cpg_num_darf', 'cpg_num_darf', 'cpg_serie_darf', 'cpg_serie_darf', 'cpg_num_adianta', 'cpg_num_adianta', 'cpg_serie_adianta', 'cpg_serie_adianta'],
        );
    }

    public function nfe(): BelongsTo
    {
        return $this->belongsTo(
            Nfe::class,
            ['cpg_nfe_tipo', 'cpg_nfe_tipo', 'cpg_nfe_tipo', 'cpg_nfe_tipo', 'cpg_nfe_num', 'cpg_nfe_num', 'cpg_nfe_num', 'cpg_nfe_num', 'cpg_nfe_serie', 'cpg_nfe_serie', 'cpg_nfe_serie', 'cpg_nfe_serie', 'cpg_nfe_fne_cod', 'cpg_nfe_fne_cod', 'cpg_nfe_fne_cod', 'cpg_nfe_fne_cod'],
            ['nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num'],
        );
    }

    public function aee(): BelongsTo
    {
        return $this->belongsTo(
            Aee::class,
            ['cpg_aee_id'],
            ['aee_id'],
        );
    }

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['cpg_ccr_banco', 'cpg_transf_ccr_destino'],
            ['ccr_cod', 'ccr_cod'],
        );
    }

    public function cpi(): BelongsTo
    {
        return $this->belongsTo(
            Cpi::class,
            ['cpg_cpi_cod'],
            ['cpi_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['cpg_emp_cod', 'cpg_emp_cod_credito'],
            ['emp_cod', 'emp_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['cpg_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['cpg_psv_cod'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cpg_usr_login', 'cpg_aut_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
