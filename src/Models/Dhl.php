<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dhl extends OracleEloquent
{
    use Compoships;

    protected $table = 'dhl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dhl_awb_number'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dhl_usr_login'],
            ['usr_login'],
        );
    }
}
