<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rpp extends OracleEloquent
{
    use Compoships;

    protected $table = 'rpp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rpp_tro_cod', 'rpp_rco_cod', 'rpp_pro_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pro(): BelongsTo
    {
        return $this->belongsTo(
            Pro::class,
            ['rpp_pro_cod'],
            ['pro_cod'],
        );
    }

    public function rco(): BelongsTo
    {
        return $this->belongsTo(
            Rco::class,
            ['rpp_rco_cod', 'rpp_rco_cod', 'rpp_tro_cod', 'rpp_tro_cod'],
            ['rco_cod', 'rco_tro_cod', 'rco_cod', 'rco_tro_cod'],
        );
    }
}
