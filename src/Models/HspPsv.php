<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HspPsv extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hsp_p_psv_cod', 'hsp_p_pac_reg', 'hsp_p_hsp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['hsp_p_hsp_num', 'hsp_p_hsp_num', 'hsp_p_pac_reg', 'hsp_p_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['hsp_p_psv_cod'],
            ['psv_cod'],
        );
    }
}
