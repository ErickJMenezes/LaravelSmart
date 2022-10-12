<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Prn extends OracleEloquent
{
    use Compoships;

    protected $table = 'prn';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['prn_num', 'prn_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['prn_pac_reg'],
            ['pac_reg'],
        );
    }
}
