<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rtr extends OracleEloquent
{
    use Compoships;

    protected $table = 'rtr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rtr_cod', 'rtr_cnv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['rtr_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
