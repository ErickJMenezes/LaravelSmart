<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgPac extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_pac';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_pac_pac_reg', 'img_pac_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['img_pac_pac_reg'],
            ['pac_reg'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_pac_img_cod'],
            ['img_cod'],
        );
    }
}
