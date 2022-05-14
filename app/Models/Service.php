<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'dasf_service';
    public $timestamps = false;

}
