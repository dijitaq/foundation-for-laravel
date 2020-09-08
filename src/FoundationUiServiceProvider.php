<?php
namespace Dijitaq\FoundationUi;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class FoundationUiServiceProvider extends ServiceProvider
{
	/**
      * Bootstrap the preset
      *
      * @return void
      */
	public function boot()
	{
		UiCommand::macro('foundation', function ($command) {

		}

		UiCommand::macro('foundation-auth', function ($command) {

		}
	}
}