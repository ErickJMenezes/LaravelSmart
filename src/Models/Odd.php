<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Odd extends OracleEloquent
{
    use Compoships;

    protected $table = 'odd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['odd_dthr_reg', 'odd_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['odd_atr_num', 'odd_atr_num', 'odd_atr_dsc', 'odd_atr_dsc'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['odd_pac_reg'],
            ['pac_reg'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['odd_smm_num', 'odd_smm_num', 'odd_smm_num', 'odd_osm_num', 'odd_osm_num', 'odd_osm_num', 'odd_osm_serie', 'odd_osm_serie', 'odd_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['odd_usr_login_reg', 'odd_exec_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
