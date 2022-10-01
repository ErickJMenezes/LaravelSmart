<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HCpe extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['h_cpe_pac_reg', 'h_cpe_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['h_cpe_cut_exit_site', 'h_cpe_cut_liq_dialise'],
            ['dsc_cod', 'dsc_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_cpe_pac_reg'],
            ['pac_reg'],
        );
    }
}
