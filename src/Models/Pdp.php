<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pdp extends OracleEloquent
{
    use Compoships;

    protected $table = 'pdp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pdp_pde_num', 'pdp_aha_cod', 'pdp_aha_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function aha(): BelongsTo
    {
        return $this->belongsTo(
            Aha::class,
            ['pdp_aha_cod', 'pdp_aha_cod', 'pdp_aha_tipo', 'pdp_aha_tipo'],
            ['aha_cod', 'aha_tipo', 'aha_cod', 'aha_tipo'],
        );
    }

    public function pde(): BelongsTo
    {
        return $this->belongsTo(
            Pde::class,
            ['pdp_pde_num'],
            ['pde_num'],
        );
    }
}
