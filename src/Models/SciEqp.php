<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SciEqp extends OracleEloquent
{
    use Compoships;

    protected $table = 'sci_eqp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sci_e_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sci(): BelongsTo
    {
        return $this->belongsTo(
            Sci::class,
            ['sci_e_sci_cod'],
            ['sci_cod'],
        );
    }
}
