<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nwl extends OracleEloquent
{
    use Compoships;

    protected $table = 'nwl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nwl_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nfl(): BelongsTo
    {
        return $this->belongsTo(
            Nfl::class,
            ['nwl_nfl_num', 'nwl_nfl_num', 'nwl_nfl_serie', 'nwl_nfl_serie'],
            ['nfl_num', 'nfl_serie', 'nfl_num', 'nfl_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['nwl_usr_login'],
            ['usr_login'],
        );
    }

    public function nwa(): BelongsTo
    {
        return $this->belongsTo(
            Nwa::class,
            ['nwl_nwa_id_envio', 'nwl_nwa_id_retorno'],
            ['nwa_id', 'nwa_id'],
        );
    }
}
