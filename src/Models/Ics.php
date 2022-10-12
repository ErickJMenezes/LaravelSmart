<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ics extends OracleEloquent
{
    use Compoships;

    protected $table = 'ics';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ics_hsp_num', 'ics_pac_reg', 'ics_str_solic', 'ics_mat_cod', 'ics_conta_destino', 'ics_lot_num'];

    protected $connection = 'smart';

    protected $guarded = [];
}
