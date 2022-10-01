<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Msp extends OracleEloquent
{
    use Compoships;

    protected $table = 'msp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['msp_adp_tipo', 'msp_usr_login', 'msp_adp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['msp_adp_cod', 'msp_adp_cod', 'msp_adp_tipo', 'msp_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['msp_usr_login'],
            ['usr_login'],
        );
    }
}
