<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fle extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fle_pac_reg', 'fle_str_cod', 'fle_psv_cod', 'fle_dthr_chegada'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['fle_usr_login'],
            ['usr_login'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['fle_loc_cod'],
            ['loc_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['fle_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['fle_psv_cod'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['fle_str_cod'],
            ['str_cod'],
        );
    }
}
