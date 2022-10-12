<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Orp extends OracleEloquent
{
    use Compoships;

    protected $table = 'orp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['orp_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['orp_lta_cod'],
            ['lta_cod'],
        );
    }

    public function cna(): BelongsTo
    {
        return $this->belongsTo(
            Cna::class,
            ['orp_cna_id'],
            ['cna_id'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['orp_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function leg(): BelongsTo
    {
        return $this->belongsTo(
            Leg::class,
            ['orp_leg_cod'],
            ['leg_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['orp_psv_solic', 'orp_psv_solic_2', 'orp_psv_solic_3'],
            ['psv_cod', 'psv_cod', 'psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['orp_str_solic'],
            ['str_cod'],
        );
    }

    public function tdc(): BelongsTo
    {
        return $this->belongsTo(
            Tdc::class,
            ['orp_tdc_cod'],
            ['tdc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['orp_usr_login_lanc', 'orp_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['orp_pac_reg'],
            ['pac_reg'],
        );
    }
}
