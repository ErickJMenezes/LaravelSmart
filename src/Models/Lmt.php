<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lmt extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lmt_str_cod', 'lmt_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['lmt_loc_cod'],
            ['loc_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['lmt_str_cod'],
            ['str_cod'],
        );
    }
}
