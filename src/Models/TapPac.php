<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TapPac extends OracleEloquent
{
    use Compoships;

    protected $table = 'tap_pac';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tap_pac_tap_cod', 'tap_pac_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['tap_pac_pac_reg'],
            ['pac_reg'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['tap_pac_tap_cod'],
            ['tap_cod'],
        );
    }

    public function pat(): BelongsTo
    {
        return $this->belongsTo(
            Pat::class,
            ['tap_pac_pat_cod'],
            ['pat_cod'],
        );
    }
}
