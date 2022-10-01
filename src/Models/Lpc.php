<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lpc extends OracleEloquent
{
    use Compoships;

    protected $table = 'lpc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lpc_cnv_cod', 'lpc_tipo_fat'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['lpc_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
