<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BcsConfigCnvGcc extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcs_config_cnv_gcc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcs_config_cnv_gcc_gcc_cod', 'bcs_config_cnv_gcc_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['bcs_config_cnv_gcc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['bcs_config_cnv_gcc_gcc_cod'],
            ['gcc_cod'],
        );
    }
}
