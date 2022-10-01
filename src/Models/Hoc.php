<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hoc extends OracleEloquent
{
    use Compoships;

    protected $table = 'hoc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hoc_tipo', 'hoc_ccr_cod', 'hoc_hon_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['hoc_ccr_cod'],
            ['ccr_cod'],
        );
    }

    public function hon(): BelongsTo
    {
        return $this->belongsTo(
            Hon::class,
            ['hoc_hon_seq'],
            ['hon_seq'],
        );
    }
}
