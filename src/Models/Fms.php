<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fms extends OracleEloquent
{
    use Compoships;

    protected $table = 'fms';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fms_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nwa(): BelongsTo
    {
        return $this->belongsTo(
            Nwa::class,
            ['fms_msg_nwa_id', 'fms_msg_resposta_nwa_id'],
            ['nwa_id', 'nwa_id'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['fms_reg_usr_login', 'fms_proc_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
