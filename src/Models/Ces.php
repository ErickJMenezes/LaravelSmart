<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ces extends OracleEloquent
{
    use Compoships;

    protected $table = 'ces';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ces_cct_cod', 'ces_gcc_cod', 'ces_str_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['ces_cct_cod'],
            ['cct_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['ces_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ces_str_cod'],
            ['str_cod'],
        );
    }
}
