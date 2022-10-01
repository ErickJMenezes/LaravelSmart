<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ctt extends OracleEloquent
{
    use Compoships;

    protected $table = 'ctt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ctt_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function leg(): BelongsTo
    {
        return $this->belongsTo(
            Leg::class,
            ['ctt_leg_cod'],
            ['leg_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ctt_str_cod'],
            ['str_cod'],
        );
    }
}
