<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NfsNfl extends OracleEloquent
{
    use Compoships;

    protected $table = 'nfs_nfl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nfs_n_nfl_serie', 'nfs_n_nfs_tipo', 'nfs_n_nfs_numero', 'nfs_n_nfl_num', 'nfs_n_nfs_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['nfs_n_nfs_numero', 'nfs_n_nfs_numero', 'nfs_n_nfs_numero', 'nfs_n_nfs_serie', 'nfs_n_nfs_serie', 'nfs_n_nfs_serie', 'nfs_n_nfs_tipo', 'nfs_n_nfs_tipo', 'nfs_n_nfs_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }

    public function nfl(): BelongsTo
    {
        return $this->belongsTo(
            Nfl::class,
            ['nfs_n_nfl_num', 'nfs_n_nfl_num', 'nfs_n_nfl_serie', 'nfs_n_nfl_serie'],
            ['nfl_num', 'nfl_serie', 'nfl_num', 'nfl_serie'],
        );
    }
}
