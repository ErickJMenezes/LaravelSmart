<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exo extends OracleEloquent
{
    use Compoships;

    protected $table = 'exo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exo_cnv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['exo_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
