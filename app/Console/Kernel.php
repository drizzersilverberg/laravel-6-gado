<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Console\Commands\ExampleSendMailCommand;
use App\Console\Commands\ExampleSchedulerTest;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        ExampleSendMailCommand::class,
        ExampleSchedulerTest::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('example:scheduler-test debug --message="debug everyMinute"')->everyMinute();
        $schedule->command('example:scheduler-test info --message="info everyFiveMinutes"')->everyFiveMinutes();
        $schedule->command('example:scheduler-test notice --message="notice everyTenMinutes"')->everyTenMinutes();
        $schedule->command('example:scheduler-test warning --message="warning everyFifteenMinutes"')->everyFifteenMinutes();
        $schedule->command('example:scheduler-test error --message="error everyThirtyMinutes"')->everyThirtyMinutes();
        $schedule->command('example:scheduler-test critical --message="critical hourly"')->hourly();
        $schedule->command('example:scheduler-test alert --message="alert hourlyAt 17"')->hourlyAt(17);
        $schedule->command('example:scheduler-test emergency --message="emergency daily"')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
