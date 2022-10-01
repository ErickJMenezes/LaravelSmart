<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Avl extends OracleEloquent
{
    use Compoships;

    protected $table = 'avl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['avl_minimo', 'avl_qst_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['avl_tap_cod'],
            ['tap_cod'],
        );
    }

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['avl_qst_cod'],
            ['qst_cod'],
        );
    }
}
