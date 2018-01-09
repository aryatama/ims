<?php
	/*
    @Copyright Arya45
    @Class Name : Home(Front)
	*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// Main Page Home
	public function index() {

		$site  		= $this->mConfig->list_config();
		$galleries  = $this->mGalleries->listGalleriesPubHome();
		$blogs  	= $this->mBlogs->listBlogsPub();
		$products  	= $this->mProducts->listProductsPub();
		$clients  	= $this->mClients->listClients();
		
		$data = array(	'title'		=> 'Home - '.$site['nameweb'],
						'site'		=> $site,
						'galleries'	=> $galleries,
						'blogs'		=> $blogs,
						'products'	=> $products,
						'clients'	=> $clients,
						'isi'		=> 'public/home/list');
		$this->load->view('public/layout/wrapper',$data);
	}
}