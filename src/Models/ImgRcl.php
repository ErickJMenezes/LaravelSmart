<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgRcl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['img_rcl_ind'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_rcl_img_desktop'],
            ['img_cod'],
        );
    }

    public function gim(): BelongsTo
    {
        return $this->belongsTo(
            Gim::class,
            ['img_rcl_gim_cod'],
            ['gim_cod'],
        );
    }

    public function rcl(): BelongsTo
    {
        return $this->belongsTo(
            Rcl::class,
            ['img_rcl_rcl_dthr', 'img_rcl_rcl_dthr', 'img_rcl_rcl_dthr', 'img_rcl_rcl_dthr', 'img_rcl_rcl_cod', 'img_rcl_rcl_cod', 'img_rcl_rcl_cod', 'img_rcl_rcl_cod', 'img_rcl_rcl_tpcod', 'img_rcl_rcl_tpcod', 'img_rcl_rcl_tpcod', 'img_rcl_rcl_tpcod', 'img_rcl_rcl_pac', 'img_rcl_rcl_pac', 'img_rcl_rcl_pac', 'img_rcl_rcl_pac'],
            ['rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['img_rcl_login_usr_reg'],
            ['usr_login'],
        );
    }

    public function cax(): BelongsTo
    {
        return $this->belongsTo(
            Cax::class,
            ['img_rcl_cax_id'],
            ['cax_id'],
        );
    }
}
