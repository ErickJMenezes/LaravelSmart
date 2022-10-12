<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hal extends OracleEloquent
{
    use Compoships;

    protected $table = 'hal';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hal_pat_cod', 'hal_gbh_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['hal_amo_cod'],
            ['amo_cod'],
        );
    }

    public function gbh(): BelongsTo
    {
        return $this->belongsTo(
            Gbh::class,
            ['hal_gbh_cod'],
            ['gbh_cod'],
        );
    }

    public function pat(): BelongsTo
    {
        return $this->belongsTo(
            Pat::class,
            ['hal_pat_cod'],
            ['pat_cod'],
        );
    }
}
