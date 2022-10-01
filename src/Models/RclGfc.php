<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RclGfc extends OracleEloquent
{
    use Compoships;

    protected $table = 'rcl_gfc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rcl_r_gfc_num', 'rcl_r_id', 'rcl_r_lta_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gfc(): BelongsTo
    {
        return $this->belongsTo(
            Gfc::class,
            ['rcl_r_gfc_num', 'rcl_r_gfc_num', 'rcl_r_lta_cod', 'rcl_r_lta_cod'],
            ['gfc_num', 'gfc_lta_cod', 'gfc_num', 'gfc_lta_cod'],
        );
    }
}
