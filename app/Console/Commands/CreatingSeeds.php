<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreatingSeeds extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'braiani:seeds {--table= : Extra Table to seed (Comma separated ",")} {--force : Force the overriden}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command used to create the Voyager seeds';
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
     * Voyager tables that need to be seeded.
     *
     */
    private $voyagerTables = [
        'data_types',
        'data_rows',
        'menus',
        'menu_items',
        'roles',
        'permissions',
        'permission_role',
        'settings',
    ];
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $arguments = $this->createArguments($this->hasExtraTables(), $this->isForce());
        $this->call('iseed', $arguments);
        $this->info('All good!');
    }
    protected function hasExtraTables()
    {
        $tables = $this->option('table');
        if ($tables == null) {
            $this->warn('No extra table choosed!');
        } else {
            $tables = str_replace(" ", "", $tables);
        }
        return $tables;
    }
    protected function isForce()
    {
        $force = $this->option('force');
        if ($force != null) {
            return true;
        }
        return;
    }
    protected function createArguments($extra, $force)
    {
        $voyager = implode(',', $this->voyagerTables);
        if ($extra != null) {
            $extra = ',' . $extra;
        }
        if ($force) {
            $arguments = [
                'tables' => $voyager . $extra,
                '--force' => '--force'
            ];
        } else {
            $arguments = ['tables' => $voyager . $extra];
        }
        return $arguments;
    }
}
