<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class App extends OracleEloquent
{
    use Compoships;

    protected $table = 'app';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['app_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['app_atr_num', 'app_atr_num', 'app_dsc_cod', 'app_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['app_pac_reg'],
            ['pac_reg'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['app_tap_cod'],
            ['tap_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['app_reg_usr_login', 'app_alter_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
