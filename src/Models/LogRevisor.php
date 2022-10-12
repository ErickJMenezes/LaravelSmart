<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LogRevisor extends OracleEloquent
{
    use Compoships;

    protected $table = 'log_revisor';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['log_r_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pce(): BelongsTo
    {
        return $this->belongsTo(
            Pce::class,
            ['log_r_pce_id'],
            ['pce_id'],
        );
    }
}
