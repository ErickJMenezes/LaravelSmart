<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tkr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = [];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['tkr_mat_cod'],
            ['mat_cod'],
        );
    }

    public function elb(): BelongsTo
    {
        return $this->belongsTo(
            Elb::class,
            ['tkr_elb_cod'],
            ['elb_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['tkr_smk_cod', 'tkr_smk_cod', 'tkr_smk_tipo', 'tkr_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['tkr_usr_login', 'tkr_usr_login_del'],
            ['usr_login', 'usr_login'],
        );
    }
}
