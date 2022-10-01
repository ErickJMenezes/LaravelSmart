<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dll extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dll_osm_num', 'dll_smm_num', 'dll_dthr', 'dll_osm_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['dll_mot_cod', 'dll_mot_cod', 'dll_mot_tipo', 'dll_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function pdl(): BelongsTo
    {
        return $this->belongsTo(
            Pdl::class,
            ['dll_pdl_num', 'dll_pdl_num', 'dll_pdl_serie', 'dll_pdl_serie'],
            ['pdl_num', 'pdl_serie', 'pdl_num', 'pdl_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dll_usr_login'],
            ['usr_login'],
        );
    }
}
