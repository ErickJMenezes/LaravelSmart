<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PdcI extends OracleEloquent
{
    use Compoships;

    protected $table = 'pdc_i';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pdc_i_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pdcInd(): BelongsTo
    {
        return $this->belongsTo(
            PdcInd::class,
            ['pdc_i_pdc_ind_cod'],
            ['pdc_ind_cod'],
        );
    }
}
