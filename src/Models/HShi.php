<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HShi extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_shi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_shi_shd_id', 'h_shi_int_cod', 'h_shi_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hcInt(): BelongsTo
    {
        return $this->belongsTo(
            HcInt::class,
            ['h_shi_int_cod'],
            ['hc_int_cod'],
        );
    }

    public function hShd(): BelongsTo
    {
        return $this->belongsTo(
            HShd::class,
            ['h_shi_shd_id', 'h_shi_shd_id', 'h_shi_pac_reg', 'h_shi_pac_reg'],
            ['h_shd_id', 'h_shd_pac_reg', 'h_shd_id', 'h_shd_pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_shi_reg_usr_login'],
            ['usr_login'],
        );
    }
}
