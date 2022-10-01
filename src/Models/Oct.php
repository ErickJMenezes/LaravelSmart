<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Oct extends OracleEloquent
{
    use Compoships;

    protected $table = 'oct';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['oct_str_cod', 'oct_ano', 'oct_cct_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['oct_cct_cod'],
            ['cct_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['oct_str_cod'],
            ['str_cod'],
        );
    }
}
