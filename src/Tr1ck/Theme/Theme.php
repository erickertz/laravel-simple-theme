<?php namespace Tr1ck\Theme;

use View;

class Theme {
	
	public $themeName = 'frontend';
	public $themeLocation = '/views/themed/';
	public $layout;
	public $layoutLocation = "layouts.default";
	public $path;
	
	public function __construct()
	{
		$this->path = app_path();
		$this->setTheme($this->themeName);
		$this->setLayout($this->layoutLocation);
	}
	
	/**
	 * Set the theme
	 *
	 * @return void
	 */
	public function setTheme($themeName)
	{
		$this->themeName = $themeName;
		$currentThemeLocation = $this->path.$this->themeLocation.$this->themeName;
		View::addNamespace($this->themeName, $currentThemeLocation);
		View::share('themeName', $this->themeName);
	}
	
	/**
	 * Set the layout
	 *
	 * @return void
	 */
	public function setLayout($layoutLocation)
	{
		$this->layoutLocation = $layoutLocation;
		$this->layout = View::make($this->themeName.'::'.$this->layoutLocation);
		View::share('layoutLocation', $this->layoutLocation);
	}

}