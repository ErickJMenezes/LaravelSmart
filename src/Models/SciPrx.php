<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SciPrx extends OracleEloquent
{
    use Compoships;

    protected $table = 'sci_prx';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sci_prx_prx_cod', 'sci_prx_sci_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function prx(): BelongsTo
    {
        return $this->belongsTo(
            Prx::class,
            ['sci_prx_prx_cod'],
            ['prx_cod'],
        );
    }

    public function sci(): BelongsTo
    {
        return $this->belongsTo(
            Sci::class,
            ['sci_prx_sci_cod'],
            ['sci_cod'],
        );
    }
}
