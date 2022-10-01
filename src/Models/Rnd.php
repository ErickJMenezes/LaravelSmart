<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rnd extends OracleEloquent
{
    use Compoships;

    protected $table = 'rnd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rnd_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rnd_str_cod'],
            ['str_cod'],
        );
    }
}
