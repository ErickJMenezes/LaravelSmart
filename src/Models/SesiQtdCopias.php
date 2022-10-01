<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SesiQtdCopias extends OracleEloquent
{
    use Compoships;

    protected $table = 'sesi_qtd_copias';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sqc_cnv', 'sqc_str'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['sqc_cnv'],
            ['cnv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['sqc_str'],
            ['str_cod'],
        );
    }
}
