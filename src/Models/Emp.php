<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Emp extends OracleEloquent
{
    use Compoships;

    protected $table = 'emp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['emp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['emp_ccr_cod_enc_contas', 'emp_ccr_cod', 'emp_ccr_consig'],
            ['ccr_cod', 'ccr_cod', 'ccr_cod'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['emp_cct_cod_ativo_pj', 'emp_cct_cod_ativo', 'emp_cct_cod_adiant', 'emp_cct_cod_np', 'emp_cct_cod_nr', 'emp_cct_cod_receita', 'emp_cct_cod_receita_rno', 'emp_cct_cod_romaneio_emprest'],
            ['cct_cod', 'cct_cod', 'cct_cod', 'cct_cod', 'cct_cod', 'cct_cod', 'cct_cod', 'cct_cod'],
        );
    }

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['emp_cde_cod'],
            ['cde_cod'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['emp_cfo_cod', 'emp_cfo_cod_pis', 'emp_cfo_cod_csll', 'emp_cfo_cod_cofins', 'emp_cfo_cod_inss', 'emp_cfo_cod_irrf', 'emp_cfo_cod_iss'],
            ['cfo_cod', 'cfo_cod', 'cfo_cod', 'cfo_cod', 'cfo_cod', 'cfo_cod', 'cfo_cod'],
        );
    }

    public function cfop(): BelongsTo
    {
        return $this->belongsTo(
            Cfop::class,
            ['emp_cfop_cod'],
            ['cfop_cod'],
        );
    }

    public function cpi(): BelongsTo
    {
        return $this->belongsTo(
            Cpi::class,
            ['emp_cpi_cod'],
            ['cpi_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['emp_psv_cod', 'emp_psv_cod_revisor'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function tes(): BelongsTo
    {
        return $this->belongsTo(
            Tes::class,
            ['emp_tes_cod'],
            ['tes_cod'],
        );
    }

    public function ufe(): BelongsTo
    {
        return $this->belongsTo(
            Ufe::class,
            ['emp_pai_sigla', 'emp_pai_sigla', 'emp_ufe_sigla', 'emp_ufe_sigla'],
            ['ufe_pai_sigla', 'ufe_sigla', 'ufe_pai_sigla', 'ufe_sigla'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['emp_img_cod'],
            ['img_cod'],
        );
    }

    public function emps(): HasMany
    {
        return $this->hasMany(
            Emp::class,
            ['emp_cod'],
            ['emp_empregador'],
        );
    }

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['emp_fne_cod'],
            ['fne_cod'],
        );
    }
}
