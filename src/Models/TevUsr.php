<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TevUsr extends OracleEloquent
{
    use Compoships;

    protected $table = 'tev_usr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tev_usr_usr_login', 'tev_usr_tev_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['tev_usr_usr_login'],
            ['usr_login'],
        );
    }
}
