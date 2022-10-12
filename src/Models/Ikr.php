<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ikr extends OracleEloquent
{
    use Compoships;

    protected $table = 'ikr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ikr_dthr_ini', 'ikr_elb_cod', 'ikr_mat_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function elb(): BelongsTo
    {
        return $this->belongsTo(
            Elb::class,
            ['ikr_elb_cod'],
            ['elb_cod'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['ikr_mat_cod'],
            ['mat_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ikr_usr_login_ini', 'ikr_usr_login_fim'],
            ['usr_login', 'usr_login'],
        );
    }
}
