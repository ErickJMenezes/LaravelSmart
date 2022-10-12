<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GrWse extends OracleEloquent
{
    use Compoships;

    protected $table = 'gr_wse';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gr_wse_server_addr', 'gr_wse_usr_login'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['gr_wse_usr_login'],
            ['usr_login'],
        );
    }
}
