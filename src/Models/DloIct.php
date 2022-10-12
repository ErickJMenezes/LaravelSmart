<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DloIct extends OracleEloquent
{
    use Compoships;

    protected $table = 'dlo_ict';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dlo_i_osm_serie', 'dlo_i_smm_num', 'dlo_i_dlo_id', 'dlo_i_osm_num', 'dlo_i_ict_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dlo_i_cai_usr_descarte'],
            ['usr_login'],
        );
    }

    public function dlo(): BelongsTo
    {
        return $this->belongsTo(
            Dlo::class,
            ['dlo_i_dlo_id'],
            ['dlo_id'],
        );
    }

    public function ict(): BelongsTo
    {
        return $this->belongsTo(
            Ict::class,
            ['dlo_i_ict_id', 'dlo_i_ict_id', 'dlo_i_ict_id', 'dlo_i_ict_id', 'dlo_i_smm_num', 'dlo_i_smm_num', 'dlo_i_smm_num', 'dlo_i_smm_num', 'dlo_i_osm_num', 'dlo_i_osm_num', 'dlo_i_osm_num', 'dlo_i_osm_num', 'dlo_i_osm_serie', 'dlo_i_osm_serie', 'dlo_i_osm_serie', 'dlo_i_osm_serie'],
            ['ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie', 'ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie', 'ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie', 'ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['dlo_i_psv_cod_destino'],
            ['psv_cod'],
        );
    }
}
