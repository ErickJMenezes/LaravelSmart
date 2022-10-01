<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rex extends OracleEloquent
{
    use Compoships;

    protected $table = 'rex';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rex_cnv_cod', 'rex_cnv_cod_reaproveita'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['rex_cnv_cod', 'rex_cnv_cod_reaproveita'],
            ['cnv_cod', 'cnv_cod'],
        );
    }
}
