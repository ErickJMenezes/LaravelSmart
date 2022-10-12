<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pgt extends OracleEloquent
{
    use Compoships;

    protected $table = 'pgt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pgt_qst_cod', 'pgt_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['pgt_qst_cod'],
            ['qst_cod'],
        );
    }
}
