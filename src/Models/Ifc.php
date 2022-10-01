<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ifc extends OracleEloquent
{
    use Compoships;

    protected $table = 'ifc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ifc_cfo_cod', 'ifc_fcf_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['ifc_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function fcf(): BelongsTo
    {
        return $this->belongsTo(
            Fcf::class,
            ['ifc_fcf_cod'],
            ['fcf_cod'],
        );
    }
}
