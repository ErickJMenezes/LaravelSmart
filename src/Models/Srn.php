<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Srn extends OracleEloquent
{
    use Compoships;

    protected $table = 'srn';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['srn_pac_reg', 'srn_dthr_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['srn_pac_reg'],
            ['pac_reg'],
        );
    }
}
