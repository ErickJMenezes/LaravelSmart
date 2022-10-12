<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgCap extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_cap';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_cap_pac_reg', 'img_cap_cap_num', 'img_cap_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
