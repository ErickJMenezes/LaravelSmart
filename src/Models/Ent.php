<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ent extends OracleEloquent
{
    use Compoships;

    protected $table = 'ent';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ent_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['ent_loc_cde_cod', 'ent_solic_cde_cod'],
            ['cde_cod', 'cde_cod'],
        );
    }

    public function entCatLoc(): BelongsTo
    {
        return $this->belongsTo(
            EntCatLoc::class,
            ['ent_loc_ent_cat_loc'],
            ['ent_cat_loc_id'],
        );
    }

    public function entCat(): BelongsTo
    {
        return $this->belongsTo(
            EntCat::class,
            ['ent_solic_ent_cat'],
            ['ent_cat_id'],
        );
    }

    public function entObj(): BelongsTo
    {
        return $this->belongsTo(
            EntObj::class,
            ['ent_solic_ent_obj'],
            ['ent_obj_id'],
        );
    }

    public function entFin(): BelongsTo
    {
        return $this->belongsTo(
            EntFin::class,
            ['ent_solic_ent_fin'],
            ['ent_fin_id'],
        );
    }

    public function entSolic(): BelongsTo
    {
        return $this->belongsTo(
            EntSolic::class,
            ['ent_solic_nome'],
            ['ent_solic_id'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['ent_osm_serie', 'ent_osm_serie', 'ent_osm', 'ent_osm'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ent_usr_login', 'ent_usr_login_last'],
            ['usr_login', 'usr_login'],
        );
    }
}
