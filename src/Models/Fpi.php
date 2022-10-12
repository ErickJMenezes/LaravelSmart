<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fpi extends OracleEloquent
{
    use Compoships;

    protected $table = 'fpi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fpi_dt_vcto', 'fpi_ivt_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ivt(): BelongsTo
    {
        return $this->belongsTo(
            Ivt::class,
            ['fpi_ivt_id'],
            ['ivt_id'],
        );
    }
}
