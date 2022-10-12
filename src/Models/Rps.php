<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rps extends OracleEloquent
{
    use Compoships;

    protected $table = 'rps';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rps_serie', 'rps_numero', 'rps_str_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rps_str_cod'],
            ['str_cod'],
        );
    }
}
