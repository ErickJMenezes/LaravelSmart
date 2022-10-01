<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvPac extends OracleEloquent
{
    use Compoships;

    protected $table = 'psv_pac';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psv_pac_pac_reg', 'psv_pac_psv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['psv_pac_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['psv_pac_psv_cod'],
            ['psv_cod'],
        );
    }
}
