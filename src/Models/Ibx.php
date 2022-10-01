<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ibx extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ibx_bxa_serie', 'ibx_bxa_num', 'ibx_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['ibx_nfs_numero', 'ibx_nfs_numero', 'ibx_nfs_numero', 'ibx_nfs_serie', 'ibx_nfs_serie', 'ibx_nfs_serie', 'ibx_nfs_tipo', 'ibx_nfs_tipo', 'ibx_nfs_tipo', 'ibx_nfs_nr_num', 'ibx_nfs_nr_num', 'ibx_nfs_nr_num', 'ibx_nfs_nr_serie', 'ibx_nfs_nr_serie', 'ibx_nfs_nr_serie', 'ibx_nfs_nr_tipo', 'ibx_nfs_nr_tipo', 'ibx_nfs_nr_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }

    public function bxa(): BelongsTo
    {
        return $this->belongsTo(
            Bxa::class,
            ['ibx_bxa_num', 'ibx_bxa_num', 'ibx_bxa_serie', 'ibx_bxa_serie'],
            ['bxa_num', 'bxa_serie', 'bxa_num', 'bxa_serie'],
        );
    }

    public function fat(): BelongsTo
    {
        return $this->belongsTo(
            Fat::class,
            ['ibx_fat_num', 'ibx_fat_num', 'ibx_fat_serie', 'ibx_fat_serie'],
            ['fat_num', 'fat_serie', 'fat_num', 'fat_serie'],
        );
    }

    public function mns(): BelongsTo
    {
        return $this->belongsTo(
            Mns::class,
            ['ibx_mns_num', 'ibx_mns_num', 'ibx_mns_serie', 'ibx_mns_serie', 'ibx_mns_num_glosa', 'ibx_mns_num_glosa', 'ibx_mns_serie_glosa', 'ibx_mns_serie_glosa'],
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie', 'mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['ibx_pac_reg'],
            ['pac_reg'],
        );
    }
}
