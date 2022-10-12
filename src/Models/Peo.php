<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Peo extends OracleEloquent
{
    use Compoships;

    protected $table = 'peo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['peo_pex_pac', 'peo_pex_dthr', 'peo_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pex(): BelongsTo
    {
        return $this->belongsTo(
            Pex::class,
            ['peo_pex_dthr', 'peo_pex_dthr', 'peo_pex_pac', 'peo_pex_pac'],
            ['pex_dthr', 'pex_pac', 'pex_dthr', 'pex_pac'],
        );
    }
}
