<?php

namespace App\Console\Commands;

use App\Models\Postcode;
use App\Services\Api;
use Illuminate\Console\Command;

class GetPostcode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get-postcode';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets postcode and inserts into database';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        Postcode::create(Api::getPostcode());
    }
}
