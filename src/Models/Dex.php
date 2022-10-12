<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dex extends OracleEloquent
{
    use Compoships;

    protected $table = 'dex';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dex_num_doc', 'dex_serie_doc'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function rcl(): BelongsTo
    {
        return $this->belongsTo(
            Rcl::class,
            ['dex_rcl_dthr', 'dex_rcl_dthr', 'dex_rcl_dthr', 'dex_rcl_dthr', 'dex_rcl_cod', 'dex_rcl_cod', 'dex_rcl_cod', 'dex_rcl_cod', 'dex_rcl_tpcod', 'dex_rcl_tpcod', 'dex_rcl_tpcod', 'dex_rcl_tpcod', 'dex_rcl_pac', 'dex_rcl_pac', 'dex_rcl_pac', 'dex_rcl_pac'],
            ['rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac'],
        );
    }
}
