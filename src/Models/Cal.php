<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cal extends OracleEloquent
{
    use Compoships;

    protected $table = 'cal';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cal_dthr1'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cal_str_cod'],
            ['str_cod'],
        );
    }
}
