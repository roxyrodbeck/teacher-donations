<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  protected $fillable = ['name', 'wishlist_url', 'paypal_email'];

  public function donations()
  {
    return $this->hasMany(Donation::class);
  }

  public function totalDonations() {
    return $this->donations()->sum('amount');
  }
}
