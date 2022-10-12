<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ClivaleMse extends OracleEloquent
{
    use Compoships;

    protected $table = 'clivale_mse';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['c_mse_str_exec'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['c_mse_str_exec'],
            ['str_cod'],
        );
    }
}
