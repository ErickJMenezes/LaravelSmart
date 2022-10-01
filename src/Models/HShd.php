<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HShd extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_shd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_shd_pac_reg', 'h_shd_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['h_shd_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function hcShl(): BelongsTo
    {
        return $this->belongsTo(
            HcShl::class,
            ['h_shd_shl_id'],
            ['hc_shl_id'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_shd_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['h_shd_p_psv_cod', 'h_shd_s_psv_cod'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['h_shd_smm_num', 'h_shd_smm_num', 'h_shd_smm_num', 'h_shd_smm_osm', 'h_shd_smm_osm', 'h_shd_smm_osm', 'h_shd_smm_osm_serie', 'h_shd_smm_osm_serie', 'h_shd_smm_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }

    public function hcTdi(): BelongsTo
    {
        return $this->belongsTo(
            HcTdi::class,
            ['h_shd_tdi_cod'],
            ['hc_tdi_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_shd_alter_usr_login', 'h_shd_usr_resp_puncao', 'h_shd_reg_usr_login', 'h_shd_usr_resp_sessao'],
            ['usr_login', 'usr_login', 'usr_login', 'usr_login'],
        );
    }
}
