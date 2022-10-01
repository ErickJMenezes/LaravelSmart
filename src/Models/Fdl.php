<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fdl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fdl_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fdls(): HasMany
    {
        return $this->hasMany(
            Fdl::class,
            ['fdl_id'],
            ['fdl_pai_id'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['fdl_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['fdl_usr_login'],
            ['usr_login'],
        );
    }
}
