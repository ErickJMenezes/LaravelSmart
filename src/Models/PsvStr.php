<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvStr extends OracleEloquent
{
    use Compoships;

    protected $table = 'psv_str';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psv_str_str_cod', 'psv_str_psv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['psv_str_psv_cod'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['psv_str_str_cod'],
            ['str_cod'],
        );
    }
}
