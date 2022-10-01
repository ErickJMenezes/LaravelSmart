<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gcu extends OracleEloquent
{
    use Compoships;

    protected $table = 'gcu';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gcu_usr_login', 'gcu_gcp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gcp(): BelongsTo
    {
        return $this->belongsTo(
            Gcp::class,
            ['gcu_gcp_cod'],
            ['gcp_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['gcu_usr_login'],
            ['usr_login'],
        );
    }
}
