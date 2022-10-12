<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cvc extends OracleEloquent
{
    use Compoships;

    protected $table = 'cvc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cvc_serie', 'cvc_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cvc_usr_login'],
            ['usr_login'],
        );
    }
}
