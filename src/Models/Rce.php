<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rce extends OracleEloquent
{
    use Compoships;

    protected $table = 'rce';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rce_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function rcl(): BelongsTo
    {
        return $this->belongsTo(
            Rcl::class,
            ['rce_rcl_dthr', 'rce_rcl_dthr', 'rce_rcl_dthr', 'rce_rcl_dthr', 'rce_rcl_cod', 'rce_rcl_cod', 'rce_rcl_cod', 'rce_rcl_cod', 'rce_rcl_tpcod', 'rce_rcl_tpcod', 'rce_rcl_tpcod', 'rce_rcl_tpcod', 'rce_rcl_pac', 'rce_rcl_pac', 'rce_rcl_pac', 'rce_rcl_pac'],
            ['rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac'],
        );
    }
}
