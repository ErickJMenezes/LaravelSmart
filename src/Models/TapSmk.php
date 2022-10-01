<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TapSmk extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['tap_s_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['tap_s_tap_cod'],
            ['tap_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['tap_s_smk_cod', 'tap_s_smk_cod', 'tap_s_smk_tipo', 'tap_s_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
