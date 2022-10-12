<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ifr extends OracleEloquent
{
    use Compoships;

    protected $table = 'ifr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ifr_mte_seq', 'ifr_fcx_ccr_caixa', 'ifr_fcx_dthr_atual', 'ifr_seq', 'ifr_mte_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function fcx(): BelongsTo
    {
        return $this->belongsTo(
            Fcx::class,
            ['ifr_fcx_dthr_atual', 'ifr_fcx_dthr_atual', 'ifr_fcx_ccr_caixa', 'ifr_fcx_ccr_caixa'],
            ['fcx_dthr_atual', 'fcx_ccr_caixa', 'fcx_dthr_atual', 'fcx_ccr_caixa'],
        );
    }

    public function mte(): BelongsTo
    {
        return $this->belongsTo(
            Mte::class,
            ['ifr_mte_seq', 'ifr_mte_seq', 'ifr_mte_serie', 'ifr_mte_serie'],
            ['mte_seq', 'mte_serie', 'mte_seq', 'mte_serie'],
        );
    }
}
