<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Imd extends OracleEloquent
{
    use Compoships;

    protected $table = 'imd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['imd_pat_cod2', 'imd_pat_cod1'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pat(): BelongsTo
    {
        return $this->belongsTo(
            Pat::class,
            ['imd_pat_cod1', 'imd_pat_cod2'],
            ['pat_cod', 'pat_cod'],
        );
    }
}
