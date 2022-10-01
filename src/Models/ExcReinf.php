<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExcReinf extends OracleEloquent
{
    use Compoships;

    protected $table = 'exc_reinf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exc_reinf_exc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exc(): BelongsTo
    {
        return $this->belongsTo(
            Exc::class,
            ['exc_reinf_exc_id'],
            ['exc_id'],
        );
    }
}
