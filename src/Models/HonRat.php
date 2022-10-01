<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HonRat extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hon_r_tipo', 'hon_r_ccr_cod', 'hon_r_hon_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['hon_r_ccr_cod'],
            ['ccr_cod'],
        );
    }

    public function hon(): BelongsTo
    {
        return $this->belongsTo(
            Hon::class,
            ['hon_r_hon_seq'],
            ['hon_seq'],
        );
    }
}
