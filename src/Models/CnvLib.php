<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CnvLib extends OracleEloquent
{
    use Compoships;

    protected $table = 'cnv_lib';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cnv_lib_cnv_cod', 'cnv_lib_dthr_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cnv_lib_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cnv_lib_usr_login'],
            ['usr_login'],
        );
    }
}
