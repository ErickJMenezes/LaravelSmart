<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pal extends OracleEloquent
{
    use Compoships;

    protected $table = 'pal';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pal_str_cod', 'pal_seq', 'pal_ccr_parceiro'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['pal_ccr_parceiro'],
            ['ccr_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['pal_str_cod'],
            ['str_cod'],
        );
    }
}
