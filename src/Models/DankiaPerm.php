<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DankiaPerm extends OracleEloquent
{
    use Compoships;

    protected $table = 'dankia_perm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dp_usr_login', 'dp_sba_cod', 'dp_perm'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['dp_sba_cod'],
            ['sba_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dp_usr_login'],
            ['usr_login'],
        );
    }
}
