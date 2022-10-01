<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Vdf extends OracleEloquent
{
    use Compoships;

    protected $table = 'vdf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vdf_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['vdf_pac_reg'],
            ['pac_reg'],
        );
    }
}
