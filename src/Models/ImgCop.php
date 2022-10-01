<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgCop extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_cop';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_cop_cop_serie', 'img_cop_img_cod', 'img_cop_cop_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cop(): BelongsTo
    {
        return $this->belongsTo(
            Cop::class,
            ['img_cop_cop_num', 'img_cop_cop_num', 'img_cop_cop_serie', 'img_cop_cop_serie'],
            ['cop_num', 'cop_serie', 'cop_num', 'cop_serie'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_cop_img_cod'],
            ['img_cod'],
        );
    }
}
