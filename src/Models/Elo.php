<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Elo extends OracleEloquent
{
    use Compoships;

    protected $table = 'elo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['elo_serie', 'elo_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['elo_psv_cod'],
            ['psv_cod'],
        );
    }
}
