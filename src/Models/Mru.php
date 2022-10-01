<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mru extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mru_mnt_serie', 'mru_mnt_num', 'mru_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['mru_st_emp_cod'],
            ['emp_cod'],
        );
    }

    public function fmt(): BelongsTo
    {
        return $this->belongsTo(
            Fmt::class,
            ['mru_rh_fmt_cod'],
            ['fmt_cod'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['mru_rm_mat_cod'],
            ['mat_cod'],
        );
    }

    public function mnt(): BelongsTo
    {
        return $this->belongsTo(
            Mnt::class,
            ['mru_mnt_num', 'mru_mnt_num', 'mru_mnt_serie', 'mru_mnt_serie'],
            ['mnt_num', 'mnt_serie', 'mnt_num', 'mnt_serie'],
        );
    }

    public function pri(): BelongsTo
    {
        return $this->belongsTo(
            Pri::class,
            ['mru_pri_cod'],
            ['pri_cod'],
        );
    }
}
