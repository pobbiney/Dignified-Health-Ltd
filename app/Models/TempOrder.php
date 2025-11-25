<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempOrder extends Model
{
           public function provider()
{
	return $this->belongsTo(ServiceProvider::class, 'provider_id', 'id'); // Adjust if your FK is different
}
       public function package()
{
	return $this->belongsTo(ConsumerPackage::class, 'package_id', 'id'); // Adjust if your FK is different
}
}
