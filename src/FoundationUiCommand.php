<?php

namespace Dijitaq\FoundationUi;

use Illuminate\Console\Command;
use Laravel\Ui\Presets\Preset;

class FoundationUiCommand extends Command
{
	/**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'foundation-ui
                { --auth : Install authentication UI scaffolding }
                { --option=* : Pass an option to the preset command }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Swap the front-end scaffolding for the application with Zurb Foundation';

    /**
     * Execute the console command.
     *
     * @return void
     *
     */
    public function handle()
    {
        $this->foundation();
    }

    /**
     * Install the foundation preset.
     *
     * @return void
     */
    protected function foundation()
    {
        if ($this->option('auth')) {
            $this->call('ui:controllers');

            $this->call('ui:auth');

            Presets\Foundation::install(true);

        } else {
            Presets\Foundation::install(false);
        }

        $this->info('Zurb Foundation scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
}