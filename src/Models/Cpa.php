<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cpa extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cpa_aft_serie', 'cpa_dthr', 'cpa_dthr_reg', 'cpa_aft_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function aft(): BelongsTo
    {
        return $this->belongsTo(
            Aft::class,
            ['cpa_aft_num', 'cpa_aft_num', 'cpa_aft_serie', 'cpa_aft_serie'],
            ['aft_num', 'aft_serie', 'aft_num', 'aft_serie'],
        );
    }

    public function ipg(): BelongsTo
    {
        return $this->belongsTo(
            Ipg::class,
            ['cpa_ipg_parc', 'cpa_ipg_parc', 'cpa_ipg_parc', 'cpa_cpg_num', 'cpa_cpg_num', 'cpa_cpg_num', 'cpa_cpg_serie', 'cpa_cpg_serie', 'cpa_cpg_serie'],
            ['ipg_parc', 'ipg_cpg_num', 'ipg_cpg_serie', 'ipg_parc', 'ipg_cpg_num', 'ipg_cpg_serie', 'ipg_parc', 'ipg_cpg_num', 'ipg_cpg_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cpa_usr_login', 'cpa_usr_login_cancela'],
            ['usr_login', 'usr_login'],
        );
    }
}
