<?php

namespace Lux\Contus\Commands;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Composer;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Console\GeneratorCommand as LaravelGeneratorCommand;
use Illuminate\Console\Command;

abstract class BaseCommand extends Command
{
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        dd($this->signature);
        // $args = [
        //     'name'    => $this->argumentName()
        // ];
        // // extra custom option
        // if ($this->extraOption) {
        //     $args["--{$this->extraOption}"] = $this->optionExtra();
        // }
        // $this->call('generate:file', $args);
    }    

}
