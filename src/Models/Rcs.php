<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rcs extends OracleEloquent
{
    use Compoships;

    protected $table = 'rcs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rcs_compet', 'rcs_str_origem', 'rcs_str_destino'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rcs_str_origem', 'rcs_str_destino'],
            ['str_cod', 'str_cod'],
        );
    }
}
