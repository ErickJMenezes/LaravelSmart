<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pnl extends OracleEloquent
{
    use Compoships;

    protected $table = 'pnl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pnl_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pnl_usr_login_reg'],
            ['usr_login'],
        );
    }
}
