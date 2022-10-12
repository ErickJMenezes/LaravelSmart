<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TdcUsr extends OracleEloquent
{
    use Compoships;

    protected $table = 'tdc_usr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tdc_u_usr_login', 'tdc_u_tdc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function tdc(): BelongsTo
    {
        return $this->belongsTo(
            Tdc::class,
            ['tdc_u_tdc_cod'],
            ['tdc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['tdc_u_usr_login'],
            ['usr_login'],
        );
    }
}
