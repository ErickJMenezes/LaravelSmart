<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ean extends OracleEloquent
{
    use Compoships;

    protected $table = 'ean';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ean_dthr_ini', 'ean_tro_cod', 'ean_lta_cod', 'ean_gfc_num', 'ean_rco_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gfc(): BelongsTo
    {
        return $this->belongsTo(
            Gfc::class,
            ['ean_gfc_num', 'ean_gfc_num', 'ean_lta_cod', 'ean_lta_cod'],
            ['gfc_num', 'gfc_lta_cod', 'gfc_num', 'gfc_lta_cod'],
        );
    }

    public function pro(): BelongsTo
    {
        return $this->belongsTo(
            Pro::class,
            ['ean_pro_cod'],
            ['pro_cod'],
        );
    }

    public function rco(): BelongsTo
    {
        return $this->belongsTo(
            Rco::class,
            ['ean_rco_cod', 'ean_rco_cod', 'ean_tro_cod', 'ean_tro_cod'],
            ['rco_cod', 'rco_tro_cod', 'rco_cod', 'rco_tro_cod'],
        );
    }
}
