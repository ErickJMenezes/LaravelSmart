<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Eeq extends OracleEloquent
{
    use Compoships;

    protected $table = 'eeq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['eeq_ean_tro_cod', 'eeq_cod', 'eeq_ean_dthr_ini', 'eeq_esoc_eqp_cod', 'eeq_ean_rco_cod', 'eeq_ean_lta_cod', 'eeq_ean_gfc_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function esocEqp(): BelongsTo
    {
        return $this->belongsTo(
            EsocEqp::class,
            ['eeq_esoc_eqp_cod'],
            ['esoc_eqp_cod'],
        );
    }

    public function ean(): BelongsTo
    {
        return $this->belongsTo(
            Ean::class,
            ['eeq_ean_dthr_ini', 'eeq_ean_dthr_ini', 'eeq_ean_dthr_ini', 'eeq_ean_dthr_ini', 'eeq_ean_dthr_ini', 'eeq_ean_rco_cod', 'eeq_ean_rco_cod', 'eeq_ean_rco_cod', 'eeq_ean_rco_cod', 'eeq_ean_rco_cod', 'eeq_ean_tro_cod', 'eeq_ean_tro_cod', 'eeq_ean_tro_cod', 'eeq_ean_tro_cod', 'eeq_ean_tro_cod', 'eeq_ean_gfc_num', 'eeq_ean_gfc_num', 'eeq_ean_gfc_num', 'eeq_ean_gfc_num', 'eeq_ean_gfc_num', 'eeq_ean_lta_cod', 'eeq_ean_lta_cod', 'eeq_ean_lta_cod', 'eeq_ean_lta_cod', 'eeq_ean_lta_cod'],
            ['ean_dthr_ini', 'ean_rco_cod', 'ean_tro_cod', 'ean_gfc_num', 'ean_lta_cod', 'ean_dthr_ini', 'ean_rco_cod', 'ean_tro_cod', 'ean_gfc_num', 'ean_lta_cod', 'ean_dthr_ini', 'ean_rco_cod', 'ean_tro_cod', 'ean_gfc_num', 'ean_lta_cod', 'ean_dthr_ini', 'ean_rco_cod', 'ean_tro_cod', 'ean_gfc_num', 'ean_lta_cod', 'ean_dthr_ini', 'ean_rco_cod', 'ean_tro_cod', 'ean_gfc_num', 'ean_lta_cod'],
        );
    }
}
