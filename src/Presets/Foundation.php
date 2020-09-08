<?php

namespace Dijitaq\FoundationUi\Presets;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Laravel\Ui\Presets\Preset;

class Foundation extends Preset
{
	/**
      * Install the preset.
      *
      * @return void
      */
    	public static function install($auth = false)
    	{
        	static::updatePackages();
        	static::updateSass();
        	static::updateBootstrapping();

        	if ($auth) {
        		static::updateWelcomeView();
        		static::updateAuthViews();

        	} else {
        		static::updateWelcomeView();
        	}

        	static::removeNodeModules();
    	}

    	/**
    	 * Update the given package array.
      *
      * @param  array  $packages
      * @return array
      */
	protected static function updatePackageArray(array $packages)
    	{
    	     return [
    	          'foundation-sites' 	=> '^6.6.3',
    	          'jquery' 			=> '^3.2',
    	          'what-input' 		=> '^4.1.0'

    	     ] + Arr::except($packages, [
			'boostrap',
			'bootstrap-sass',
			'bulma',
			'uikit'
    	     ]);
    	}

    	/**
	 * Update the Sass files for the application.
	 *
	 * @return void
	 */
	protected static function updateSass()
	{
	   	// clean up orphan files
	   	$orphan_sass_files = glob(resource_path('/sass/*.*'));

	   	foreach($orphan_sass_files as $sass_file)
	   	{
	       	(new Filesystem)->delete($sass_file);
	   	}

	   	copy(__DIR__.'/foundation-stubs/_settings.scss', resource_path('sass/_settings.scss'));
	   	copy(__DIR__.'/foundation-stubs/foundation.scss', resource_path('sass/foundation.scss'));
	   	copy(__DIR__.'/foundation-stubs/app.scss', resource_path('sass/app.scss'));
	}

	/**
      * Update the bootstrapping files.
      *
      * @return void
      */
    	protected static function updateBootstrapping()
    	{
        	(new Filesystem)->delete(
            	resource_path('js/bootstrap.js')
        	);

        	copy(__DIR__.'/foundation-stubs/bootstrap.js', resource_path('js/bootstrap.js'));
    	}

    	/**
      * Update auth views
      *
      * @return void
      */
    	protected static function updateWelcomeView()
    	{
    		// remove default welcome page
        	(new Filesystem)->delete(
            	resource_path('views/welcome.blade.php')
        	);

        	// copy new one with Zurb Foundation buttons
        	copy(__DIR__.'/foundation-stubs/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    	}

    	/**
      * Update auth views
      *
      * @return void
      */
    	protected static function updateAuthViews()
    	{
        	(new Filesystem)->delete(
            	resource_path('js/bootstrap.js')
        	);

        	// Copy Zurb Foundation Auth view templates
        	(new Filesystem)->copyDirectory(__DIR__.'/foundation-stubs/views', resource_path('views'));
    	}
}