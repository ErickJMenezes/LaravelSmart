<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mmc extends OracleEloquent
{
    use Compoships;

    protected $table = 'mmc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mmc_mrc_cod', 'mmc_mat_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['mmc_mat_cod'],
            ['mat_cod'],
        );
    }

    public function mrc(): BelongsTo
    {
        return $this->belongsTo(
            Mrc::class,
            ['mmc_mrc_cod'],
            ['mrc_cod'],
        );
    }
}
