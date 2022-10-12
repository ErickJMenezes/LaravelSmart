<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PacAlerta extends OracleEloquent
{
    use Compoships;

    protected $table = 'pac_alerta';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pac_a_pac_reg', 'pac_a_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['pac_a_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pac_a_usr_login'],
            ['usr_login'],
        );
    }
}
