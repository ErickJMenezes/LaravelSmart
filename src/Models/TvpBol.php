<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TvpBol extends OracleEloquent
{
    use Compoships;

    protected $table = 'tvp_bol';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tvp_bol_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function tvp(): BelongsTo
    {
        return $this->belongsTo(
            Tvp::class,
            ['tvp_pac_reg', 'tvp_pac_reg', 'tvp_id', 'tvp_id'],
            ['tvp_id', 'tvp_pac_reg', 'tvp_id', 'tvp_pac_reg'],
        );
    }
}
