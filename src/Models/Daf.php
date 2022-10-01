<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Daf extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['daf_aft_num', 'daf_dthr', 'daf_aft_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function aft(): BelongsTo
    {
        return $this->belongsTo(
            Aft::class,
            ['daf_aft_num', 'daf_aft_num', 'daf_aft_serie', 'daf_aft_serie'],
            ['aft_num', 'aft_serie', 'aft_num', 'aft_serie'],
        );
    }

    public function dafEvento(): BelongsTo
    {
        return $this->belongsTo(
            DafEvento::class,
            ['daf_daf_e_cod'],
            ['daf_e_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['daf_usr_login'],
            ['usr_login'],
        );
    }
}
