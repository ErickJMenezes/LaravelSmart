<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cgd extends OracleEloquent
{
    use Compoships;

    protected $table = 'cgd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cgd_cnv_cod', 'cgd_dt_base'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cgd_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
