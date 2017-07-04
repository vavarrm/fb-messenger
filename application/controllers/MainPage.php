<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainPage extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		
    }
	
	public function index()
	{
	
		$t = dechex(strtotime('2017-12-31 00:00:00'));
		$path = "/newcc.mp4.mp4";
		$key = "fda80cab4c8b3f88ce89a2aac398c09b59ab60ba";
		$host= "http://or69z0vu8.bkt.clouddn.com";
		$s= $key.urlencode($path).$t;
		$sing = strtolower(md5($s));
		$url =$host.urlencode($path)."?v=1.1&sign=".$sing."&t=".$t;
		// $url = "http://or69z0vu8.bkt.clouddn.com".urlencode(sprintf($url, "fda80cab4c8b3f88ce89a2aac398c09b59ab60ba",$t));
		echo $url;
		exit;
		$shopList = array(
			array(
			),			
			array(
			),			
			array(
			),			
			array(
			),			
			array(
			),
		);
		$slideImageList = array(
			array(
			),			
			array(
			),			
			array(
			),		
		);
		
		$foodTypeClass = array(
			array(
			),
			array(
			),
			array(
			),
		);
		
		$this->smarty->assign(array(
			'shopList'			=>$shopList,
			'slideImageList'	=>$slideImageList,
			'foodTypeClass'	=>$foodTypeClass
		));
		$this->smarty->display(__CLASS__.'/index.tpl');
	}
	
	public function shopInfo()
	{
		
		$shopImageList = array(
			array(
			),
			array(
			),
			array(
			),
			array(
			),
		);
		
		$this->smarty->assign(array(
			'shopImageList'			=>$shopImageList
		));
		$this->smarty->display(__CLASS__.'/shopInfo.tpl');
	}
	
	
}
