<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sap extends OracleEloquent
{
    use Compoships;

    protected $table = 'sap';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sap_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cdg(): BelongsTo
    {
        return $this->belongsTo(
            Cdg::class,
            ['sap_cdg_num', 'sap_cdg_num', 'sap_cdg_serie', 'sap_cdg_serie'],
            ['cdg_num', 'cdg_serie', 'cdg_num', 'cdg_serie'],
        );
    }

    public function sApacAltaPerm(): BelongsTo
    {
        return $this->belongsTo(
            SApacAltaPerm::class,
            ['sap_s_apac_ap_cod'],
            ['s_apac_ap_cod'],
        );
    }

    public function apc(): BelongsTo
    {
        return $this->belongsTo(
            Apc::class,
            ['sap_apc_num'],
            ['apc_num'],
        );
    }

    public function sApacMotEnc(): BelongsTo
    {
        return $this->belongsTo(
            SApacMotEnc::class,
            ['sap_mot_cobr'],
            ['s_apac_mot_enc_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['sap_psv_solic'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['sap_smk_cod', 'sap_smk_cod', 'sap_smk_tipo', 'sap_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['sap_usr_login_imp', 'sap_usr_login_reg'],
            ['usr_login', 'usr_login'],
        );
    }
}
