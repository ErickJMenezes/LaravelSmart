<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HCam extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['h_cam_h_cav_id', 'h_cam_bul_med', 'h_cam_num', 'h_cam_pac_reg', 'h_cam_h_avc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hCav(): BelongsTo
    {
        return $this->belongsTo(
            HCav::class,
            ['h_cam_h_avc_id', 'h_cam_h_avc_id', 'h_cam_h_avc_id', 'h_cam_pac_reg', 'h_cam_pac_reg', 'h_cam_pac_reg', 'h_cam_h_cav_id', 'h_cam_h_cav_id', 'h_cam_h_cav_id'],
            ['h_cav_h_avc_id', 'h_cav_pac_reg', 'h_cav_id', 'h_cav_h_avc_id', 'h_cav_pac_reg', 'h_cav_id', 'h_cav_h_avc_id', 'h_cav_pac_reg', 'h_cav_id'],
        );
    }
}
