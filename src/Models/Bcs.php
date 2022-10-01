<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bcs extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcs_conselho', 'bcs_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['bcs_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
