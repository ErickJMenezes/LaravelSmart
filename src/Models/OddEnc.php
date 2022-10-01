<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class OddEnc extends OracleEloquent
{
    use Compoships;

    protected $table = 'odd_enc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['odd_e_dthr', 'odd_e_psv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['odd_e_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['odd_e_psv_cod'],
            ['psv_cod'],
        );
    }
}
