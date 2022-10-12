<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mns extends OracleEloquent
{
    use Compoships;

    protected $table = 'mns';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mns_num', 'mns_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cba(): BelongsTo
    {
        return $this->belongsTo(
            Cba::class,
            ['mns_cba_seq'],
            ['cba_seq'],
        );
    }

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['mns_ccr_cod'],
            ['ccr_cod'],
        );
    }

    public function mns(): HasMany
    {
        return $this->hasMany(
            Mns::class,
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
            ['mns_mns_num', 'mns_mns_num', 'mns_mns_serie', 'mns_mns_serie'],
        );
    }

    public function nfl(): BelongsTo
    {
        return $this->belongsTo(
            Nfl::class,
            ['mns_nfl_num', 'mns_nfl_num', 'mns_nfl_serie', 'mns_nfl_serie'],
            ['nfl_num', 'nfl_serie', 'nfl_num', 'nfl_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['mns_usr_login'],
            ['usr_login'],
        );
    }

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['mns_nfs_serie', 'mns_nfs_serie', 'mns_nfs_serie', 'mns_nfs_tipo', 'mns_nfs_tipo', 'mns_nfs_tipo', 'mns_nfs_numero', 'mns_nfs_numero', 'mns_nfs_numero'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }
}
