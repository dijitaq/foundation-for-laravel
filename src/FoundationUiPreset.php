<?php

namespace Dijitaq\FoundationUi;

use Laravel\Ui\Presets\Preset;

class FoundationUiPreset extends Preset
{
	/**
      * Install the preset.
      *
      * @return void
      */
     public static function install( $withAuth = false )
     {
     	static::updatePackages();
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
            	'foundation-sites' => '^6.6.3',
            	'jquery' => '^3.2',

        	] + Arr::except($packages, [
            	'boostrap',
            	'bootstrap-sass',
            	'bulma',
            	'uikit'
        	]);
    	}
}