<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AppMtr extends OracleEloquent
{
    use Compoships;

    protected $table = 'app_mtr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['app_m_app_id', 'app_m_mtr_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function app(): BelongsTo
    {
        return $this->belongsTo(
            App::class,
            ['app_m_app_id'],
            ['app_id'],
        );
    }

    public function mtr(): BelongsTo
    {
        return $this->belongsTo(
            Mtr::class,
            ['app_m_mtr_id'],
            ['mtr_id'],
        );
    }
}
