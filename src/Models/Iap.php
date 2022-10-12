<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Iap extends OracleEloquent
{
    use Compoships;

    protected $table = 'iap';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['iap_dsc_cod', 'iap_atr_num', 'iap_equip_num', 'iap_smk_cod', 'iap_elb_cod', 'iap_smk_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['iap_atr_num', 'iap_atr_num', 'iap_dsc_cod', 'iap_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function elb(): BelongsTo
    {
        return $this->belongsTo(
            Elb::class,
            ['iap_elb_cod'],
            ['elb_cod'],
        );
    }

    public function pvtDestino(): BelongsTo
    {
        return $this->belongsTo(
            PvtDestino::class,
            ['iap_pvt_d_id'],
            ['pvt_d_id'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['iap_smk_cod', 'iap_smk_cod', 'iap_smk_tipo', 'iap_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
