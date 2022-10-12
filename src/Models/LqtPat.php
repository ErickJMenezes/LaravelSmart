<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LqtPat extends OracleEloquent
{
    use Compoships;

    protected $table = 'lqt_pat';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pat_cod', 'lqt_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function lqt(): BelongsTo
    {
        return $this->belongsTo(
            Lqt::class,
            ['lqt_cod'],
            ['lqt_cod'],
        );
    }

    public function pat(): BelongsTo
    {
        return $this->belongsTo(
            Pat::class,
            ['pat_cod'],
            ['pat_cod'],
        );
    }
}
