<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class OrdGsv extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ord_gsv_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gsv(): BelongsTo
    {
        return $this->belongsTo(
            Gsv::class,
            ['ord_gsv_cod'],
            ['gsv_cod'],
        );
    }
}
