<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tpa extends OracleEloquent
{
    use Compoships;

    protected $table = 'tpa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tpa_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['tpa_usr_login_reg', 'tpa_usr_login_fecha', 'tpa_usr_login_descarte'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }

    public function gal(): BelongsTo
    {
        return $this->belongsTo(
            Gal::class,
            ['tpa_gal_cod'],
            ['gal_cod'],
        );
    }
}
