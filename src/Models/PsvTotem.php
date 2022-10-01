<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvTotem extends OracleEloquent
{
    use Compoships;

    protected $table = 'psv_totem';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psv_t_prefixo', 'psv_t_psv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['psv_t_psv_cod'],
            ['psv_cod'],
        );
    }
}
