<?php
/**
* 
*/
class Test_model extends CI_Model
{
	var $gallery_path;
	var $gallery_path_url;

	function __construct()
	{
		parent::__construct();

		$this->gallery_path = realpath(APPPATH . '../images');
		$this->gallery_path_url = base_url() . 'images/';
	}


	function get_images()
	{
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.','..','thumbs','.DS_Store'));

		$images = array();
		foreach ($files as $file) 
		{
			$filename = basename( $file );
			if ($filename == "cs.jpg")
			{
				$images[] = array(
					'url' => $this->gallery_path_url . $file,
					'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
					);
			}
		}
		//echo count($images);
		return $images;
	}
}


