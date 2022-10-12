<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HcShl extends OracleEloquent
{
    use Compoships;

    protected $table = 'hc_shl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hc_shl_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['hc_shl_str_cod'],
            ['str_cod'],
        );
    }
}
