<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PacFav extends OracleEloquent
{
    use Compoships;

    protected $table = 'pac_fav';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pac_f_usr_login', 'pac_f_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['pac_f_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pac_f_usr_login'],
            ['usr_login'],
        );
    }
}
