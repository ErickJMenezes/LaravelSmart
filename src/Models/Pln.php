<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pln extends OracleEloquent
{
    use Compoships;

    protected $table = 'pln';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pln_cod', 'pln_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cle(): BelongsTo
    {
        return $this->belongsTo(
            Cle::class,
            ['pln_cle_cod'],
            ['cle_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['pln_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
