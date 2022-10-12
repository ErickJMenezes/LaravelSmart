<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Frc extends OracleEloquent
{
    use Compoships;

    protected $table = 'frc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['frc_descr', 'frc_psv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['frc_psv_cod'],
            ['psv_cod'],
        );
    }
}
