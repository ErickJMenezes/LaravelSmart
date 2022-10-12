<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HEhd extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_ehd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_ehd_pac_reg', 'h_ehd_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['h_ehd_hep_dil_bul_med'],
            ['bul_med'],
        );
    }

    public function hcAgulha(): BelongsTo
    {
        return $this->belongsTo(
            HcAgulha::class,
            ['h_ehd_hc_agulha_cod'],
            ['hc_agulha_cod'],
        );
    }

    public function hcCap(): BelongsTo
    {
        return $this->belongsTo(
            HcCap::class,
            ['h_ehd_hc_cap'],
            ['hc_cap_cod'],
        );
    }

    public function hcMaq(): BelongsTo
    {
        return $this->belongsTo(
            HcMaq::class,
            ['h_ehd_hc_maq_cod'],
            ['hc_maq_cod'],
        );
    }

    public function hcShl(): BelongsTo
    {
        return $this->belongsTo(
            HcShl::class,
            ['h_ehd_hc_shl_id'],
            ['hc_shl_id'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_ehd_pac_reg'],
            ['pac_reg'],
        );
    }
}
