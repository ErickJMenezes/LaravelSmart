<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fmv extends OracleEloquent
{
    use Compoships;

    protected $table = 'fmv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fmv_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['fmv_pac_reg'],
            ['pac_reg'],
        );
    }
}
