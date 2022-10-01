<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Npp extends OracleEloquent
{
    use Compoships;

    protected $table = 'npp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['npp_pac_reg', 'npp_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['npp_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['npp_usr_login_reg'],
            ['usr_login'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['npp_pac_reg'],
            ['pac_reg'],
        );
    }
}
