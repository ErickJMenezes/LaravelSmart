<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cpw extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cpw_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cpw_pac_cnv'],
            ['cnv_cod'],
        );
    }
}
