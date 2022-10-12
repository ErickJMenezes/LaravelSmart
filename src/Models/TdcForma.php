<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TdcForma extends OracleEloquent
{
    use Compoships;

    protected $table = 'tdc_forma';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tdc_f_tdc_cod', 'tdc_f_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cre(): BelongsTo
    {
        return $this->belongsTo(
            Cre::class,
            ['tdc_f_cre_cod'],
            ['cre_cod'],
        );
    }

    public function tdc(): BelongsTo
    {
        return $this->belongsTo(
            Tdc::class,
            ['tdc_f_tdc_cod'],
            ['tdc_cod'],
        );
    }
}
