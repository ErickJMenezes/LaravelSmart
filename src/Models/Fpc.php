<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fpc extends OracleEloquent
{
    use Compoships;

    protected $table = 'fpc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fpc_num', 'fpc_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['fpc_usr_login', 'fpc_usr_login_canc'],
            ['usr_login', 'usr_login'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['fpc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['fpc_str_solic'],
            ['str_cod'],
        );
    }
}
