<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CncAviso extends OracleEloquent
{
    use Compoships;

    protected $table = 'cnc_aviso';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cnc_c_str_destino', 'cnc_c_cnc_cod', 'cnc_c_usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnc(): BelongsTo
    {
        return $this->belongsTo(
            Cnc::class,
            ['cnc_c_cnc_cod'],
            ['cnc_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cnc_c_str_destino'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cnc_c_usr_login'],
            ['usr_login'],
        );
    }
}
