<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class WebLaudo extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['web_laudo_osm_serie', 'web_laudo_osm', 'web_laudo_smm'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usi(): BelongsTo
    {
        return $this->belongsTo(
            Usi::class,
            ['web_laudo_usi_login'],
            ['usi_login'],
        );
    }
}
