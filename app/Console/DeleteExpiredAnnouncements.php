<?php

namespace App\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DeleteExpiredAnnouncements extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'announcement:delete-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deletes expired announcements from the announcement histories table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Delete expired announcements
        DB::table('announcement_histories')->where('end_date', '<', now())->delete();
    }
}
