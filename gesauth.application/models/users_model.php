<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Models CRUD Users for Gesauth
 *
 *
 * Copyright (C) 2014 Gaëtan Cottrez.
 *
 *
 * @package    	Gesauth
 * @copyright  	Copyright (c) 2014, Gaëtan Cottrez
 * @license 	GNU GENERAL PUBLIC LICENSE
 * @license 	http://www.gnu.org/licenses/gpl.txt GNU GENERAL PUBLIC LICENSE
 * @version    	1.1
 * @author 		Gaëtan Cottrez <gaetan.cottrez@laviedunwebdeveloper.com>
 */

 class Users_model extends CI_Model
{
	function __construct() {
		parent::__construct();

	}

	/**
	 *	Get list language.
	 *
	  *	@return object		result of request
	 */
	public function get_list_languages()
	{
		 return $this->db->get(PREFIX.'languages');
	}

}

?>