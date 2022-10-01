<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rpv extends OracleEloquent
{
    use Compoships;

    protected $table = 'rpv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rpv_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['rpv_cde_cod', 'rpv_naturalidade_cde_cod'],
            ['cde_cod', 'cde_cod'],
        );
    }
}
