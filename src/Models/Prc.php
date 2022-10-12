<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Prc extends OracleEloquent
{
    use Compoships;

    protected $table = 'prc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['prc_pid'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['prc_usr_login'],
            ['usr_login'],
        );
    }
}
