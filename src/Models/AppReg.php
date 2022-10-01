<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AppReg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['app_r_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function app(): BelongsTo
    {
        return $this->belongsTo(
            App::class,
            ['app_r_app_id'],
            ['app_id'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['app_r_usr_login_reg'],
            ['usr_login'],
        );
    }
}
