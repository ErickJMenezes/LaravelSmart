<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Vll extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['vll_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['vll_emp_cod'],
            ['emp_cod'],
        );
    }

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['vll_nfs_serie', 'vll_nfs_serie', 'vll_nfs_serie', 'vll_nfs_tipo', 'vll_nfs_tipo', 'vll_nfs_tipo', 'vll_nfs_numero', 'vll_nfs_numero', 'vll_nfs_numero'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }
}
