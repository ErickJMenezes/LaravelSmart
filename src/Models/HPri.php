<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HPri extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_pri';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_pri_cap_id', 'h_pri_id', 'h_pri_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hCap(): BelongsTo
    {
        return $this->belongsTo(
            HCap::class,
            ['h_pri_cap_id', 'h_pri_cap_id', 'h_pri_pac_reg', 'h_pri_pac_reg'],
            ['h_cap_id', 'h_cap_pac_reg', 'h_cap_id', 'h_cap_pac_reg'],
        );
    }
}
