<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExcelBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ram:excel-backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Descarga el excel de movies todos los días';

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
     * @return int
     */
    public function handle()
    {
        \Log::info('ram:excel-backup');

        $this->line('Done!');

        return 0;
    }
}
