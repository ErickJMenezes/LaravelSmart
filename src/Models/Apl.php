<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Apl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['apl_psc_num', 'apl_psc_hsp', 'apl_psc_asc', 'apl_psc_pac', 'apl_dthr_aplic'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['apl_usr_login_termino', 'apl_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['apl_bun_cod'],
            ['bun_cod'],
        );
    }

    public function cdg(): BelongsTo
    {
        return $this->belongsTo(
            Cdg::class,
            ['apl_cdg_num', 'apl_cdg_num', 'apl_cdg_serie', 'apl_cdg_serie'],
            ['cdg_num', 'cdg_serie', 'cdg_num', 'cdg_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['apl_psc_pac'],
            ['pac_reg'],
        );
    }

    public function psc(): BelongsTo
    {
        return $this->belongsTo(
            Psc::class,
            ['apl_psc_asc', 'apl_psc_asc', 'apl_psc_asc', 'apl_psc_asc', 'apl_psc_num', 'apl_psc_num', 'apl_psc_num', 'apl_psc_num', 'apl_psc_hsp', 'apl_psc_hsp', 'apl_psc_hsp', 'apl_psc_hsp', 'apl_psc_pac', 'apl_psc_pac', 'apl_psc_pac', 'apl_psc_pac'],
            ['psc_asc', 'psc_num', 'psc_hsp', 'psc_pac', 'psc_asc', 'psc_num', 'psc_hsp', 'psc_pac', 'psc_asc', 'psc_num', 'psc_hsp', 'psc_pac', 'psc_asc', 'psc_num', 'psc_hsp', 'psc_pac'],
        );
    }
}
