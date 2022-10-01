<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Acp extends OracleEloquent
{
    use Compoships;

    protected $table = 'acp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['acp_pac_reg', 'acp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['acp_pac_reg'],
            ['pac_reg'],
        );
    }
}
