<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dir extends OracleEloquent
{
    use Compoships;

    protected $table = 'dir';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dir_hsp_num', 'dir_pac_reg', 'dir_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
