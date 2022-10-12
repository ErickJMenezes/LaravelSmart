<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HCap extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_cap';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_cap_pac_reg', 'h_cap_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hcCap(): BelongsTo
    {
        return $this->belongsTo(
            HcCap::class,
            ['h_cap_cod'],
            ['hc_cap_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_cap_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_cap_reg_usr_login'],
            ['usr_login'],
        );
    }
}
