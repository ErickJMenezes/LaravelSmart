<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PbdVrs extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pbd_v_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pbd(): BelongsTo
    {
        return $this->belongsTo(
            Pbd::class,
            ['pbd_v_pbd_id'],
            ['pbd_id'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pbd_v_reg_usr_login', 'pbd_v_usr_teste'],
            ['usr_login', 'usr_login'],
        );
    }
}
