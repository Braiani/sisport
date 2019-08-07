<?php

namespace App\Console\Commands;

use App\Jobs\UpdatePortariasJob;
use App\Portaria;
use App\Status;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdatePortarias extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updates:portarias';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Used to update the portarias';

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
        $status = Status::padraoCadastro()->first();
        $portarias = Portaria::where('vencimento', '<', Carbon::today())->where('status_id', $status->id)->get();
        foreach ($portarias as $portaria) {
            dispatch(new UpdatePortariasJob($portaria));
        }
    }
}
