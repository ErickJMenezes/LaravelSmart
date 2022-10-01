<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fee extends OracleEloquent
{
    use Compoships;

    protected $table = 'fee';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fee_osm_serie', 'fee_osm_num', 'fee_dthr_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['fee_psv_mreq'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['fee_usr_login_reg', 'fee_usr_login_envio'],
            ['usr_login', 'usr_login'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['fee_osm_num', 'fee_osm_num', 'fee_osm_serie', 'fee_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }
}
