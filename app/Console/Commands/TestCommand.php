<?php

namespace App\Console\Commands;

use App\Actions\TestActions\ReturnInput;
use App\Actions\TestActions\ReturnInputWithCurse;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $this->info(\Ennetech\TestClass::hello());
        $this->info(ReturnInput::run("input test"));
        $this->info(ReturnInputWithCurse::run(" < is cursing!"));
        return 0;
    }
}
