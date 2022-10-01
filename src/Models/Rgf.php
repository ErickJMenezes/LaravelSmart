<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rgf extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rgf_tro_cod', 'rgf_rco_cod', 'rgf_lta_cod', 'rgf_gfc_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gfc(): BelongsTo
    {
        return $this->belongsTo(
            Gfc::class,
            ['rgf_gfc_num', 'rgf_gfc_num', 'rgf_lta_cod', 'rgf_lta_cod'],
            ['gfc_num', 'gfc_lta_cod', 'gfc_num', 'gfc_lta_cod'],
        );
    }

    public function rco(): BelongsTo
    {
        return $this->belongsTo(
            Rco::class,
            ['rgf_rco_cod', 'rgf_rco_cod', 'rgf_tro_cod', 'rgf_tro_cod'],
            ['rco_cod', 'rco_tro_cod', 'rco_cod', 'rco_tro_cod'],
        );
    }
}
