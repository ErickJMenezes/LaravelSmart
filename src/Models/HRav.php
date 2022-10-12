<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HRav extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_rav';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_rav_pac_reg', 'h_rav_avc_id', 'h_rav_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hAvc(): BelongsTo
    {
        return $this->belongsTo(
            HAvc::class,
            ['h_rav_avc_id', 'h_rav_avc_id', 'h_rav_pac_reg', 'h_rav_pac_reg'],
            ['h_avc_id', 'h_avc_pac_reg', 'h_avc_id', 'h_avc_pac_reg'],
        );
    }
}
