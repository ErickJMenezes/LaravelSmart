<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MatPac extends OracleEloquent
{
    use Compoships;

    protected $table = 'mat_pac';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mat_pac_mat_cod', 'mat_pac_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['mat_pac_pac_reg'],
            ['pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['mat_pac_str_cod'],
            ['str_cod'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['mat_pac_sba_cod'],
            ['sba_cod'],
        );
    }
}
