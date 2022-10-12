<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LayoutEtqCmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'layout_etq_cmp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['layout_etq_cmp_layout_etq_cod', 'layout_etq_cmp_cmp_etq_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cmpEtq(): BelongsTo
    {
        return $this->belongsTo(
            CmpEtq::class,
            ['layout_etq_cmp_cmp_etq_cod'],
            ['cmp_etq_cod'],
        );
    }

    public function layoutEtq(): BelongsTo
    {
        return $this->belongsTo(
            LayoutEtq::class,
            ['layout_etq_cmp_layout_etq_cod'],
            ['layout_etq_cod'],
        );
    }
}
