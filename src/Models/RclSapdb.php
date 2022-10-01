<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RclSapdb extends OracleEloquent
{
    use Compoships;

    protected $table = 'rcl_sapdb';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rcl_s_cod', 'rcl_s_pac_reg', 'rcl_s_dthr', 'rcl_s_tpcod', 'rcl_s_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['rcl_s_pac_reg'],
            ['pac_reg'],
        );
    }
}
