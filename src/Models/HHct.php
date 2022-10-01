<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HHct extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['h_hct_id', 'h_hct_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['h_hct_emp_cod'],
            ['emp_cod'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['h_hct_loc_cod'],
            ['loc_cod'],
        );
    }

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['h_hct_antibiotico_bul_med'],
            ['bul_med'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_hct_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['h_hct_retirada_psv_cod'],
            ['psv_cod'],
        );
    }

    public function hcTct(): BelongsTo
    {
        return $this->belongsTo(
            HcTct::class,
            ['h_hct_tct_cod'],
            ['hc_tct_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_hct_reg_usr_login', 'h_hct_alter_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
