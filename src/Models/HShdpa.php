<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HShdpa extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_shdpa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_shdpa_pac_reg', 'h_shdpa_id', 'h_shdpa_h_shd_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hShd(): BelongsTo
    {
        return $this->belongsTo(
            HShd::class,
            ['h_shdpa_h_shd_id', 'h_shdpa_h_shd_id', 'h_shdpa_pac_reg', 'h_shdpa_pac_reg'],
            ['h_shd_id', 'h_shd_pac_reg', 'h_shd_id', 'h_shd_pac_reg'],
        );
    }
}
