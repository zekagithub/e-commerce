<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dtbs extends CI_Model
{
	function kontrol($email,$sifre)
	{
		$cavab=$this->db->select('*')
		->from('admin')
		->where('email',$email)
		->where('password',$sifre)
		->get()->row();
		return $cavab;

	}
	function timeupdate($id,$data=array())
	{
		$cavab=$this->db->where('id',$id)->update('admin',$data);
		return $cavab;
	}
	function list($from)
	{
		$cavab=$this->db->select('*')->from($from)->order_by('id','desc')->get()->result();
		return $cavab;
	}
	function cek($id,$from)
	{
		$cavab=$this->db->select('*')->from($from)->where('id',$id)->get()->row();
		return $cavab;
	}
	function update($data=array(),$id,$where,$from)
	{
		$cavab=$this->db->where($where,$id)->update($from,$data);
		return $cavab;

	}
	function add($from,$data=array())
	{
		$cavab=$this->db->insert($from,$data);
		return $cavab;
	}
	function delete($id,$where,$from)
	{
		$cavab=$this->db->delete($from,array($where=>$id));
		return $cavab;
	}
	function mesajupdate($id,$data=array())
	{
      $cavab=$this->db->from('id',$id)->update('mesajlar',$data);
      return $cavab;
	}
	function katlist($kat)
	{
		$cavab=$this->db->select('*')->from('products')->where('kat_id',$kat)
		->where('status','1')->order_by('id','desc')->get()->result();
		return $cavab;
	}
	function mehsulsayi($kat)
	{
		$cavab=$this->db->select('*')->from('products')->where('kat_id',$kat)
		->where('status','1')->count_all_results();
		return $cavab;
	}
	function eynekper($per,$segment)
	{
		$cavab=$this->db->select('*')->from('products')
		->where('kat_id','1')->order_by('id','desc')->limit($per,$segment)
		->get()->result();
		return $cavab;
	}	
	function saatper($per,$segment)
	{
		$cavab=$this->db->select('*')->from('products')
		->where('kat_id','4')->order_by('id','desc')->limit($per,$segment)
		->get()->result();
		return $cavab;
	}
	function specialper($per,$segment)
	{
		$cavab=$this->db->select('*')->from('products')
		->where('kat_id','6')->order_by('id','desc')->limit($per,$segment)
		->get()->result();
		return $cavab;
	}
	function elektronikper($per,$segment)
	{
		$cavab=$this->db->select('*')->from('products')
		->where('kat_id','3')->order_by('id','desc')->limit($per,$segment)
		->get()->result();
		return $cavab;
	}
	function xususigunlerper($per,$segment)
	{
		$cavab=$this->db->select('*')->from('products')
		->where('kat_id','5')->order_by('id','desc')->limit($per,$segment)
		->get()->result();
		return $cavab;
	}
	function productabout($sef)
	{
		$cavab=$this->db->select('*')->from('products')->where('status','1')
		->where('sef',$sef)->get()->row();
		return $cavab;
	}
	function userkontrol($email,$sifre)
	{
		$cavab=$this->db->select('*')->from('user')
		->where('email',$email)->where('sifre',$sifre)
		->get()->row();
		return $cavab;
	}
	function axtar($term)
	{
		$cavab=$this->db->select('title as value,id,kat_id,sef')->from('products')->like('title',$term)->get()->result();
		return $cavab;

	}
}
?>