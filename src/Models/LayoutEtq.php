<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LayoutEtq extends OracleEloquent
{
    use Compoships;

    protected $table = 'layout_etq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['layout_etq_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dce(): BelongsTo
    {
        return $this->belongsTo(
            Dce::class,
            ['layout_etq_dce_id_teste'],
            ['dce_id'],
        );
    }

    public function imp(): BelongsTo
    {
        return $this->belongsTo(
            Imp::class,
            ['layout_etq_imp_cod'],
            ['imp_cod'],
        );
    }

    public function layoutTip(): BelongsTo
    {
        return $this->belongsTo(
            LayoutTip::class,
            ['layout_etq_layout_tip_cod'],
            ['layout_tip_cod'],
        );
    }
}
