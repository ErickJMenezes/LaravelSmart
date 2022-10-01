<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Slt extends OracleEloquent
{
    use Compoships;

    protected $table = 'slt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['slt_serie', 'slt_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['slt_loc_cod'],
            ['loc_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['slt_pac_reg'],
            ['pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['slt_str_cod'],
            ['str_cod'],
        );
    }
}
