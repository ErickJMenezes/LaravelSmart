<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HcDpg extends OracleEloquent
{
    use Compoships;

    protected $table = 'hc_dpg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hc_dpg_id', 'hc_dpg_h_dpc_id', 'hc_dpg_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hDpc(): BelongsTo
    {
        return $this->belongsTo(
            HDpc::class,
            ['hc_dpg_h_dpc_id', 'hc_dpg_h_dpc_id', 'hc_dpg_pac_reg', 'hc_dpg_pac_reg'],
            ['h_dpc_id', 'h_dpc_pac_reg', 'h_dpc_id', 'h_dpc_pac_reg'],
        );
    }
}
