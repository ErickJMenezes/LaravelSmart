<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CmpEtq extends OracleEloquent
{
    use Compoships;

    protected $table = 'cmp_etq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cmp_etq_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function layoutTip(): BelongsTo
    {
        return $this->belongsTo(
            LayoutTip::class,
            ['cmp_etq_layout_tip_cod'],
            ['layout_tip_cod'],
        );
    }
}
