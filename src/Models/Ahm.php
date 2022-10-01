<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ahm extends OracleEloquent
{
    use Compoships;

    protected $table = 'ahm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ahm_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function aha(): BelongsTo
    {
        return $this->belongsTo(
            Aha::class,
            ['ahm_aha_cod', 'ahm_aha_cod', 'ahm_aha_tipo', 'ahm_aha_tipo'],
            ['aha_cod', 'aha_tipo', 'aha_cod', 'aha_tipo'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['ahm_mat_cod'],
            ['mat_cod'],
        );
    }
}
