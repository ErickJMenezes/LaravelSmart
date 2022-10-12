<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ivt extends OracleEloquent
{
    use Compoships;

    protected $table = 'ivt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ivt_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['ivt_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ivt_str_cod'],
            ['str_cod'],
        );
    }
}
