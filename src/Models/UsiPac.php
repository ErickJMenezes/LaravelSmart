<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class UsiPac extends OracleEloquent
{
    use Compoships;

    protected $table = 'usi_pac';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['usi_p_pac_reg', 'usi_p_usi_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['usi_p_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usi(): BelongsTo
    {
        return $this->belongsTo(
            Usi::class,
            ['usi_p_usi_login'],
            ['usi_login'],
        );
    }
}
