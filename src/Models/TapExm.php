<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TapExm extends OracleEloquent
{
    use Compoships;

    protected $table = 'tap_exm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tap_e_tap_cod', 'tap_e_exm_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['tap_e_exm_cod'],
            ['exm_cod'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['tap_e_tap_cod'],
            ['tap_cod'],
        );
    }
}
