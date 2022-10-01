<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HEhdx extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['h_ehdx_pac_reg', 'h_ehdx_num', 'h_ehdx_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hEhd(): BelongsTo
    {
        return $this->belongsTo(
            HEhd::class,
            ['h_ehdx_id', 'h_ehdx_id', 'h_ehdx_pac_reg', 'h_ehdx_pac_reg'],
            ['h_ehd_id', 'h_ehd_pac_reg', 'h_ehd_id', 'h_ehd_pac_reg'],
        );
    }

    public function hcMaq(): BelongsTo
    {
        return $this->belongsTo(
            HcMaq::class,
            ['h_ehdx_hc_maq_cod'],
            ['hc_maq_cod'],
        );
    }

    public function hcShl(): BelongsTo
    {
        return $this->belongsTo(
            HcShl::class,
            ['h_ehdx_hc_shl_id'],
            ['hc_shl_id'],
        );
    }
}
