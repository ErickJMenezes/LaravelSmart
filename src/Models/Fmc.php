<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fmc extends OracleEloquent
{
    use Compoships;

    protected $table = 'fmc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fmc_mrc_cod', 'fmc_fne_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['fmc_fne_cod'],
            ['fne_cod'],
        );
    }

    public function mrc(): BelongsTo
    {
        return $this->belongsTo(
            Mrc::class,
            ['fmc_mrc_cod'],
            ['mrc_cod'],
        );
    }
}
