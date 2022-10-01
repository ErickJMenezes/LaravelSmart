<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ald extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ald_osm_serie', 'ald_dthr', 'ald_osm_num', 'ald_smm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['ald_mot_cod', 'ald_mot_cod', 'ald_mot_tipo', 'ald_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ald_usr_login'],
            ['usr_login'],
        );
    }
}
