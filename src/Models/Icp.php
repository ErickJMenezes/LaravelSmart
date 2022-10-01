<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Icp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['icp_seq', 'icp_cop_serie', 'icp_cop_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['icp_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['icp_str_cod'],
            ['str_cod'],
        );
    }

    public function cpi(): BelongsTo
    {
        return $this->belongsTo(
            Cpi::class,
            ['icp_cpi_cod'],
            ['cpi_cod'],
        );
    }

    public function cop(): BelongsTo
    {
        return $this->belongsTo(
            Cop::class,
            ['icp_cop_num', 'icp_cop_num', 'icp_cop_serie', 'icp_cop_serie'],
            ['cop_num', 'cop_serie', 'cop_num', 'cop_serie'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['icp_mat_cod'],
            ['mat_cod'],
        );
    }

    public function unm(): BelongsTo
    {
        return $this->belongsTo(
            Unm::class,
            ['icp_unm_cod'],
            ['unm_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['icp_usr_login_status'],
            ['usr_login'],
        );
    }
}
