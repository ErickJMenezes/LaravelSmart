<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CnvParm extends OracleEloquent
{
    use Compoships;

    protected $table = 'cnv_parm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cnv_p_cnv_cod', 'cnv_p_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cnv_p_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
