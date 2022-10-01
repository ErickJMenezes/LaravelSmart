<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gmt extends OracleEloquent
{
    use Compoships;

    protected $table = 'gmt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gmt_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['gmt_str_cod'],
            ['str_cod'],
        );
    }
}
