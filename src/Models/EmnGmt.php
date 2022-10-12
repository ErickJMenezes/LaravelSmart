<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmnGmt extends OracleEloquent
{
    use Compoships;

    protected $table = 'emn_gmt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['emn_g_emn_cod', 'emn_g_gmt_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function emn(): BelongsTo
    {
        return $this->belongsTo(
            Emn::class,
            ['emn_g_emn_cod'],
            ['emn_cod'],
        );
    }

    public function gmt(): BelongsTo
    {
        return $this->belongsTo(
            Gmt::class,
            ['emn_g_gmt_cod'],
            ['gmt_cod'],
        );
    }
}
