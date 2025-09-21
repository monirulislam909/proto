<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'slug_name', 'logo'];



    protected $appends = ['time'];

    protected function getTimeAttribute()
    {

        $time = $this->created_at;
        // If $time is not numeric, convert it to timestamp
        if (!is_numeric($time)) {
            $time = strtotime($time);
        }

        $diff = time() - $time;

        if ($diff < 1) {
            return "just now";
        }

        $units = [
            31536000 => "year",
            2592000  => "month",
            604800   => "week",
            86400    => "day",
            3600     => "hour",
            60       => "minute",
            1        => "second"
        ];

        foreach ($units as $secs => $label) {
            $d = floor($diff / $secs);
            if ($d >= 1) {
                return $d . " " . $label . ($d > 1 ? "s" : "") . " ago";
            }
        }
    }
}
