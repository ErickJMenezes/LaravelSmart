<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cme extends OracleEloquent
{
    use Compoships;

    protected $table = 'cme';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cme_sba_cod', 'cme_mes', 'cme_mat_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['cme_mat_cod'],
            ['mat_cod'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['cme_sba_cod'],
            ['sba_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cme_usr_login'],
            ['usr_login'],
        );
    }
}
