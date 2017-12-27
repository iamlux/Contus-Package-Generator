<?php

namespace Lux\Contus\Commands;

use Lux\Contus\Commands\BaseCommand; 

class ControllerCommand extends BaseCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contus:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a contus controller';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
}