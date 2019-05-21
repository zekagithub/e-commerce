<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sebet extends CI_Controller {

function add()
{
	$data=array(
		'id'=>$this->input->post('productid'),
		'name'=>$this->input->post('baslik'),
		'qty'=>$this->input->post('eded'),
		'price'=>$this->input->post('fiyat'),
		'mini1'=>$this->input->post('resim')

	);
	$this->cart->insert($data);
}



}
?>