<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cre extends OracleEloquent
{
    use Compoships;

    protected $table = 'cre';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cre_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['cre_ccr_cod', 'cre_ccr_despesa', 'cre_ccr_credito'],
            ['ccr_cod', 'ccr_cod', 'ccr_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['cre_gcc_cod'],
            ['gcc_cod'],
        );
    }
}
