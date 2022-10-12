<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ppp extends OracleEloquent
{
    use Compoships;

    protected $table = 'ppp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ppp_pac_reg', 'ppp_dthr', 'ppp_lta_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['ppp_lta_cod'],
            ['lta_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['ppp_pac_reg'],
            ['pac_reg'],
        );
    }
}
