<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cbn extends OracleEloquent
{
    use Compoships;

    protected $table = 'cbn';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cbn_dthr', 'cbn_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['cbn_pac_reg'],
            ['pac_reg'],
        );
    }
}
