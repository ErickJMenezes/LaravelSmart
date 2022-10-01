<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HAvc extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_avc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_avc_id', 'h_avc_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['h_avc_emp_cod'],
            ['emp_cod'],
        );
    }

    public function hcMip(): BelongsTo
    {
        return $this->belongsTo(
            HcMip::class,
            ['h_avc_motivo_implante'],
            ['hc_mip_cod'],
        );
    }

    public function hcTpa(): BelongsTo
    {
        return $this->belongsTo(
            HcTpa::class,
            ['h_avc_tipo_acesso'],
            ['hc_tpa_cod'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['h_avc_osm_num', 'h_avc_osm_num', 'h_avc_osm_serie', 'h_avc_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_avc_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['h_avc_psv_cod'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_avc_reg_usr_login', 'h_avc_alter_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
