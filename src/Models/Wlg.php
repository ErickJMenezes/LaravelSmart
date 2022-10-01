<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Wlg extends OracleEloquent
{
    use Compoships;

    protected $table = 'wlg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['wlg_web_laudo_osm', 'wlg_web_laudo_osm_serie', 'wlg_usi_login', 'wlg_web_laudo_smm'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usi(): BelongsTo
    {
        return $this->belongsTo(
            Usi::class,
            ['wlg_usi_login'],
            ['usi_login'],
        );
    }

    public function webLaudo(): BelongsTo
    {
        return $this->belongsTo(
            WebLaudo::class,
            ['wlg_web_laudo_smm', 'wlg_web_laudo_smm', 'wlg_web_laudo_smm', 'wlg_web_laudo_osm_serie', 'wlg_web_laudo_osm_serie', 'wlg_web_laudo_osm_serie', 'wlg_web_laudo_osm', 'wlg_web_laudo_osm', 'wlg_web_laudo_osm'],
            ['web_laudo_smm', 'web_laudo_osm_serie', 'web_laudo_osm', 'web_laudo_smm', 'web_laudo_osm_serie', 'web_laudo_osm', 'web_laudo_smm', 'web_laudo_osm_serie', 'web_laudo_osm'],
        );
    }
}
