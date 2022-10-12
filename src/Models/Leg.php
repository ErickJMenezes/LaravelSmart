<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Leg extends OracleEloquent
{
    use Compoships;

    protected $table = 'leg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['leg_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['leg_str_cod'],
            ['str_cod'],
        );
    }
}
