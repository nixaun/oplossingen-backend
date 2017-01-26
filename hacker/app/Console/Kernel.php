<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    
    protected $commands = [
        'App\Console\Commands\UpdateNewsItems',
    ];

    
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('update:news_items')->dailyAt('19:57');
    }
}
