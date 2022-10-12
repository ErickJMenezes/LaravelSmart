<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Apq extends OracleEloquent
{
    use Compoships;

    protected $table = 'apq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['apq_cod', 'apq_qst_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['apq_usr_login_reg', 'apq_del_usr_login', 'apq_usr_login'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['apq_qst_cod'],
            ['qst_cod'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['apq_osm_num', 'apq_osm_num', 'apq_osm_serie', 'apq_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }
}
