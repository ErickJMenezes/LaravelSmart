<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lim extends OracleEloquent
{
    use Compoships;

    protected $table = 'lim';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lim_lic_commid', 'lim_msgid'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function lic(): BelongsTo
    {
        return $this->belongsTo(
            Lic::class,
            ['lim_lic_commid'],
            ['lic_commid'],
        );
    }
}
