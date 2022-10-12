<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class WebLaudo extends OracleEloquent
{
    use Compoships;

    protected $table = 'web_laudo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['web_laudo_osm_serie', 'web_laudo_osm', 'web_laudo_smm'];

    protected $connection = 'smart';

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
