<?php

namespace App\Http\ScheduledTask;

use App\Models\GameInfo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SetToFree
{
    public function execute()
    {
        GameInfo::where('price', '<', 500000)->update(['price' => 0]);
    }
}
