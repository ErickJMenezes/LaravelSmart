<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bvc extends OracleEloquent
{
    use Compoships;

    protected $table = 'bvc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bvc_dthr_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['bvc_usr_login_reg'],
            ['usr_login'],
        );
    }
}
