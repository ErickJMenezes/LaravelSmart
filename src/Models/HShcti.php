<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HShcti extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_shcti';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_shcti_pac_reg', 'h_shcti_h_shd_id', 'h_shcti_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hShd(): BelongsTo
    {
        return $this->belongsTo(
            HShd::class,
            ['h_shcti_h_shd_id', 'h_shcti_h_shd_id', 'h_shcti_pac_reg', 'h_shcti_pac_reg'],
            ['h_shd_id', 'h_shd_pac_reg', 'h_shd_id', 'h_shd_pac_reg'],
        );
    }
}
