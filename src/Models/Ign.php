<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ign extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ign_gni_serie', 'ign_gni_num', 'ign_mns_num', 'ign_mns_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gni(): BelongsTo
    {
        return $this->belongsTo(
            Gni::class,
            ['ign_gni_num', 'ign_gni_num', 'ign_gni_serie', 'ign_gni_serie'],
            ['gni_num', 'gni_serie', 'gni_num', 'gni_serie'],
        );
    }

    public function mns(): BelongsTo
    {
        return $this->belongsTo(
            Mns::class,
            ['ign_mns_num', 'ign_mns_num', 'ign_mns_serie', 'ign_mns_serie'],
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
        );
    }
}
