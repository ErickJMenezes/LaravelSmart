<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Uha extends OracleEloquent
{
    use Compoships;

    protected $table = 'uha';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['uha_dia', 'uha_hor_ini', 'uha_usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['uha_usr_login'],
            ['usr_login'],
        );
    }
}
