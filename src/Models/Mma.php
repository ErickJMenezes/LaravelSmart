<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mma extends OracleEloquent
{
    use Compoships;

    protected $table = 'mma';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mma_serie', 'mma_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['mma_emp_cod'],
            ['emp_cod'],
        );
    }

    public function gmm(): BelongsTo
    {
        return $this->belongsTo(
            Gmm::class,
            ['mma_gmm_cod'],
            ['gmm_cod'],
        );
    }

    public function ism(): BelongsTo
    {
        return $this->belongsTo(
            Ism::class,
            ['mma_sma_num', 'mma_sma_num', 'mma_sma_num', 'mma_sma_serie', 'mma_sma_serie', 'mma_sma_serie', 'mma_ism_seq', 'mma_ism_seq', 'mma_ism_seq'],
            ['ism_seq', 'ism_sma_num', 'ism_sma_serie', 'ism_seq', 'ism_sma_num', 'ism_sma_serie', 'ism_seq', 'ism_sma_num', 'ism_sma_serie'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['mma_mat_cod'],
            ['mat_cod'],
        );
    }

    public function mem(): BelongsTo
    {
        return $this->belongsTo(
            Mem::class,
            ['mma_mem_cod'],
            ['mem_cod'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['mma_sba_cod', 'mma_sba_transf'],
            ['sba_cod', 'sba_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['mma_str_cod'],
            ['str_cod'],
        );
    }

    public function tmm(): BelongsTo
    {
        return $this->belongsTo(
            Tmm::class,
            ['mma_tipo_operacao'],
            ['tmm_cod'],
        );
    }

    public function tpd(): BelongsTo
    {
        return $this->belongsTo(
            Tpd::class,
            ['mma_tpd_cod'],
            ['tpd_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['mma_usr_login'],
            ['usr_login'],
        );
    }

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['mma_consig_fne_cod'],
            ['fne_cod'],
        );
    }
}
