<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CnvBfp extends OracleEloquent
{
    use Compoships;

    protected $table = 'cnv_bfp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cnv_b_cnv_cod', 'cnv_b_forma_pag'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cnv_b_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
