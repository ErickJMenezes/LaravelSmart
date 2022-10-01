<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lcq extends OracleEloquent
{
    use Compoships;

    protected $table = 'lcq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lcq_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lcq_usr_login_cria', 'lcq_usr_login_alter'],
            ['usr_login', 'usr_login'],
        );
    }
}
