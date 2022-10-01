<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ctl extends OracleEloquent
{
    use Compoships;

    protected $table = 'ctl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ctl_hsp', 'ctl_dthr', 'ctl_pac'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['ctl_pac'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ctl_usr_login', 'ctl_del_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
