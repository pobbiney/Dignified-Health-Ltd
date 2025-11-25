<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
       public function username()
{
	return $this->belongsTo(User::class, 'user_id', 'id'); // Adjust if your FK is different
}

}
