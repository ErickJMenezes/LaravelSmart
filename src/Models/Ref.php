<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ref extends OracleEloquent
{
    use Compoships;

    protected $table = 'ref';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ref_id', 'ref_sexo', 'ref_id_dias', 'ref_peso', 'ref_atr', 'ref_met_cod', 'ref_dsc'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function met(): BelongsTo
    {
        return $this->belongsTo(
            Met::class,
            ['ref_met_cod', 'ref_met_cod', 'ref_met_cod', 'ref_atr', 'ref_atr', 'ref_atr', 'ref_dsc', 'ref_dsc', 'ref_dsc'],
            ['met_cod', 'met_atr_num', 'met_dsc_cod', 'met_cod', 'met_atr_num', 'met_dsc_cod', 'met_cod', 'met_atr_num', 'met_dsc_cod'],
        );
    }
}
