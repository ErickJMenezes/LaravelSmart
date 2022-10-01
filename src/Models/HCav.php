<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HCav extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['h_cav_pac_reg', 'h_cav_h_avc_id', 'h_cav_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['h_cav_diag_hem_cult1_dsc_cod', 'h_cav_diag_hem_cult2_dsc_cod', 'h_cav_diag_sec_cult1_dsc_cod', 'h_cav_diag_ptc_cult1_dsc_cod'],
            ['dsc_cod', 'dsc_cod', 'dsc_cod', 'dsc_cod'],
        );
    }

    public function hAvc(): BelongsTo
    {
        return $this->belongsTo(
            HAvc::class,
            ['h_cav_h_avc_id', 'h_cav_h_avc_id', 'h_cav_pac_reg', 'h_cav_pac_reg'],
            ['h_avc_id', 'h_avc_pac_reg', 'h_avc_id', 'h_avc_pac_reg'],
        );
    }
}
