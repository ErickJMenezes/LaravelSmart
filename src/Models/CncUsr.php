<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CncUsr extends OracleEloquent
{
    use Compoships;

    protected $table = 'cnc_usr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cnc_u_cnc_cod', 'cnc_u_usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnc(): BelongsTo
    {
        return $this->belongsTo(
            Cnc::class,
            ['cnc_u_cnc_cod'],
            ['cnc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cnc_u_usr_login'],
            ['usr_login'],
        );
    }
}
