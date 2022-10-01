<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgPti extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['img_pti_pti_cod', 'img_pti_img_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}