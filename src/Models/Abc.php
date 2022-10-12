<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Abc extends OracleEloquent
{
    use Compoships;

    protected $table = 'abc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['abc_dthr_calc', 'abc_ind_consignado'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['abc_usr_login'],
            ['usr_login'],
        );
    }
}
