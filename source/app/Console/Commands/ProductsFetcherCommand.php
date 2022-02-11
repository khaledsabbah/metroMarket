<?php

namespace App\Console\Commands;

use App\Factory\CriteriaFactory;
use App\Services\ReaderService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

class ProductsFetcherCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:fetch {filter_criteria} {options?*}';

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

        try {
            $products= (new ReaderService())->read("http://www.mocky.io/v2/5c6abed9330000cc2e7f4ceb");
            $filteredProducts= CriteriaFactory::Instantiate($this->argument("filter_criteria"),$this->argument("options"))
                ->meetCriteria($products);
            return $this->info($this->argument("filter_criteria")." is: ".$filteredProducts);
        }catch (\Exception $exception){
            return $this->warn($exception->getMessage());
        }
    }
}
