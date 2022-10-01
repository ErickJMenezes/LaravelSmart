<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rrp extends OracleEloquent
{
    use Compoships;

    protected $table = 'rrp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rrp_num', 'rrp_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mlr(): BelongsTo
    {
        return $this->belongsTo(
            Mlr::class,
            ['rrp_mlr_cod'],
            ['mlr_cod'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['rrp_sba_cod'],
            ['sba_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rrp_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rrp_usr_login'],
            ['usr_login'],
        );
    }
}
