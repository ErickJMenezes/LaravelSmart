<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dwo extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dwo_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dwo_usr_login_reg', 'dwo_usr_login_status', 'dwo_usr_login_teste'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }
}
