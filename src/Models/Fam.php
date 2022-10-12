<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fam extends OracleEloquent
{
    use Compoships;

    protected $table = 'fam';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fam_cod_amostra', 'fam_dthr'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function col(): BelongsTo
    {
        return $this->belongsTo(
            Col::class,
            ['fam_col_cod'],
            ['col_cod'],
        );
    }

    public function tpa(): BelongsTo
    {
        return $this->belongsTo(
            Tpa::class,
            ['fam_tpa_id'],
            ['tpa_id'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['fam_str_exe'],
            ['str_cod'],
        );
    }
}
