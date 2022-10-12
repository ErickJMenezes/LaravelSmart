<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Iin extends OracleEloquent
{
    use Compoships;

    protected $table = 'iin';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['iin_inv_num', 'iin_inv_serie', 'iin_mat_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function inv(): BelongsTo
    {
        return $this->belongsTo(
            Inv::class,
            ['iin_inv_num', 'iin_inv_num', 'iin_inv_serie', 'iin_inv_serie'],
            ['inv_num', 'inv_serie', 'inv_num', 'inv_serie'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['iin_mat_cod'],
            ['mat_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['iin_usr_login', 'iin_reg_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
