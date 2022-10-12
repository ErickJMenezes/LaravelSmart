<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tpc extends OracleEloquent
{
    use Compoships;

    protected $table = 'tpc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tpc_serie', 'tpc_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['tpc_usr_login'],
            ['usr_login'],
        );
    }
}
