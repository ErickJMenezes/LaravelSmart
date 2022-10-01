<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hsg extends OracleEloquent
{
    use Compoships;

    protected $table = 'hsg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hsg_dthr', 'hsg_osm_serie', 'hsg_smm_num', 'hsg_osm_num', 'hsg_mns_serie', 'hsg_mns_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sgo(): BelongsTo
    {
        return $this->belongsTo(
            Sgo::class,
            ['hsg_sgo_cod'],
            ['sgo_cod'],
        );
    }

    public function ext(): BelongsTo
    {
        return $this->belongsTo(
            Ext::class,
            ['hsg_mns_num', 'hsg_mns_num', 'hsg_mns_num', 'hsg_mns_num', 'hsg_mns_num', 'hsg_mns_serie', 'hsg_mns_serie', 'hsg_mns_serie', 'hsg_mns_serie', 'hsg_mns_serie', 'hsg_smm_num', 'hsg_smm_num', 'hsg_smm_num', 'hsg_smm_num', 'hsg_smm_num', 'hsg_osm_num', 'hsg_osm_num', 'hsg_osm_num', 'hsg_osm_num', 'hsg_osm_num', 'hsg_osm_serie', 'hsg_osm_serie', 'hsg_osm_serie', 'hsg_osm_serie', 'hsg_osm_serie'],
            ['ext_mns_num', 'ext_mns_serie', 'ext_smm_num', 'ext_osm_num', 'ext_osm_serie', 'ext_mns_num', 'ext_mns_serie', 'ext_smm_num', 'ext_osm_num', 'ext_osm_serie', 'ext_mns_num', 'ext_mns_serie', 'ext_smm_num', 'ext_osm_num', 'ext_osm_serie', 'ext_mns_num', 'ext_mns_serie', 'ext_smm_num', 'ext_osm_num', 'ext_osm_serie', 'ext_mns_num', 'ext_mns_serie', 'ext_smm_num', 'ext_osm_num', 'ext_osm_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['hsg_usr_login'],
            ['usr_login'],
        );
    }
}
