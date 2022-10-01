<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rga extends OracleEloquent
{
    use Compoships;

    protected $table = 'rga';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rga_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rga_usr_login_cad', 'rga_usr_login_alter'],
            ['usr_login', 'usr_login'],
        );
    }
}
