<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ded extends OracleEloquent
{
    use Compoships;

    protected $table = 'ded';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ded_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['ded_ccr_cod'],
            ['ccr_cod'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['ded_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function dce(): BelongsTo
    {
        return $this->belongsTo(
            Dce::class,
            ['ded_dce_id'],
            ['dce_id'],
        );
    }
}
