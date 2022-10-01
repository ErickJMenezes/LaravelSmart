<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Eti extends OracleEloquent
{
    use Compoships;

    protected $table = 'eti';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['eti_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function layoutEtq(): BelongsTo
    {
        return $this->belongsTo(
            LayoutEtq::class,
            ['eti_etq_layout_amostra'],
            ['layout_etq_cod'],
        );
    }
}
