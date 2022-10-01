<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exp extends OracleEloquent
{
    use Compoships;

    protected $table = 'exp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exp_seq', 'exp_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['exp_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
