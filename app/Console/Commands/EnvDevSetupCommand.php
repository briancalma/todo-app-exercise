<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EnvDevSetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup a fresh dev setup!';

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
        $this->databaseOperations();
    }

    public function databaseOperations()
    {
        $this->line('Migrating database ...');
        $this->call('migrate:fresh', ['--seed' => true]);
        $this->info('Database was successfully migrated!');
    }
}
