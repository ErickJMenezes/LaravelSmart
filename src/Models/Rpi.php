<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rpi extends OracleEloquent
{
    use Compoships;

    protected $table = 'rpi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rpi_num', 'rpi_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rpi_psv_cod'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rpi_usr_login_reg'],
            ['usr_login'],
        );
    }
}
