<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fdf extends OracleEloquent
{
    use Compoships;

    protected $table = 'fdf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fdf_usr_login', 'fdf_fdl_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fdl(): BelongsTo
    {
        return $this->belongsTo(
            Fdl::class,
            ['fdf_fdl_id'],
            ['fdl_id'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['fdf_usr_login'],
            ['usr_login'],
        );
    }
}
