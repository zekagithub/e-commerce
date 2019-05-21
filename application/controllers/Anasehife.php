<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasehife extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('front/anasehife');
	}
	public function gizlilik()
	{
		$this->load->view('front/gizlilik/anasehife');
	}
	public function satis()
	{
		$this->load->view('front/satis/anasehife');
	}
	public function suallar()
	{
		$this->load->view('front/suallar/anasehife');
	}
	public function qaranti()
	{
		$this->load->view('front/qaranti/anasehife');
	}
	public function elaqe()
	{
		$this->load->view('front/elaqe/anasehife');
	}
	public function mesaj()
	{
	$this->form_validation->set_rules('adsoyad','adiniz','trim|required|min_length[2]|max_length[15]');
	$this->form_validation->set_rules('email','emailiniz','trim|required|valid_email');
	$this->form_validation->set_rules('movzu','movzu','trim|required|min_length[5]');
	$this->form_validation->set_rules('mesaj','mesaj','trim|required|min_length[5]');

	$xetalar=array(
            'required'=>'{field} burani bos qoymayin',
            'min_length'=>'{field} minimum 2 herfli olmalidir',
            'valid_email'=>'{field} kecerli bir email qeyd edin' 
	);
	$this->form_validation->set_message($xetalar);

	if ($this->form_validation->run()==false) {
		redirect('anasehife/elaqe',$this->session->set_flashdata('xeta','<div class="alert alert-danger"
			<i class="fa fa-exclamation-circle"></i>
			'.$xetalar['xeta']=validation_errors().'

			'));
	}else{
		$data=array(
                 'adsoyad'=>$this->input->post('adsoyad',true),
                 'email'=>$this->input->post('email',true),
                 'movzu'=>$this->input->post('movzu',true),
                 'mesaj'=>$this->input->post('mesaj',true),
                 'tarix'=>$tarix=date('d-m-y'),
                 'ip'=>$this->input->post('ip'),
                 'status'=>0

		);


	}
	$cavab=$this->dtbs->add('mesajlar',$data);
	if($cavab)
          {
           $this->session->set_flashdata('xeta','<div class="alert alert-success"><h4>Mesaj ugurla gonderildi,sizinle mailiniz vasitesiyle elaqe saxlnacaq...</h4></div>');
			redirect('anasehife/elaqe');
			
        

          }else{
          	$this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>karqo elave edilmedi</h4></div>');
			redirect('anasehife/elaqe');

          }
	}
public function eynek()
 {
 	$cavab=$this->dtbs->katlist('1');
 	$cavab=$this->dtbs->mehsulsayi('1');

   $this->load->library('pagination');
   $config['base_url']=base_url().'eynek';
   $config['total_rows']=$cavab;
   $config['per_page']='12';
   $config['full_tag_open']='<ul>';
   $config['full_tag_close']='</ul>';
   $config['first_link']='&laquo';
   $config['first_tag_open']='<li';
   $config['first_tag_close']='</li';
   $config['last_link']='&raquo';
   $config['last_tag_open']='<li>';
   $config['last_tag_close']='</li>';
   $config['next_link']='&gt';
   $config['next_tag_open']='<li>';
   $config['next_tag_close']='</li>';
   $config['prev_link']='&gt';
   $config['prev_tag_open']='<li>';
   $config['prev_tag_open']='</li>';
   $config['cur_tag_open']='<li class="active"><span>';
   $config['cur_tag_close']='</span></li>';
   $config['num_tag_open']='<li>';
   $config['num_tag_open']='</li>';
   $this->pagination->initialize($config);
   $data['linkler']=$this->pagination->create_links();
   $data['melumat']=$this->dtbs->eynekper($config['per_page'],$this->uri->segment('2,0'));

  $this->load->view('front/eynek/anasehife',$data);
 }public function elektronik()
 {
 	$cavab=$this->dtbs->katlist('3');
 	$cavab=$this->dtbs->mehsulsayi('3');

   $this->load->library('pagination');
   $config['base_url']=base_url().'elektronik';
   $config['total_rows']=$cavab;
   $config['per_page']='12';
   $config['full_tag_open']='<ul>';
   $config['full_tag_close']='</ul>';
   $config['first_link']='&laquo';
   $config['first_tag_open']='<li';
   $config['first_tag_close']='</li';
   $config['last_link']='&raquo';
   $config['last_tag_open']='<li>';
   $config['last_tag_close']='</li>';
   $config['next_link']='&gt';
   $config['next_tag_open']='<li>';
   $config['next_tag_close']='</li>';
   $config['prev_link']='&gt';
   $config['prev_tag_open']='<li>';
   $config['prev_tag_open']='</li>';
   $config['cur_tag_open']='<li class="active"><span>';
   $config['cur_tag_close']='</span></li>';
   $config['num_tag_open']='<li>';
   $config['num_tag_open']='</li>';
   $this->pagination->initialize($config);
   $data['linkler']=$this->pagination->create_links();
   $data['melumat']=$this->dtbs->elektronikper($config['per_page'],$this->uri->segment('2,0'));
  $this->load->view('front/elektronik/anasehife',$data);
 }
 public function special()
 {
 	$cavab=$this->dtbs->katlist('6');
 	$cavab=$this->dtbs->mehsulsayi('6');

   $this->load->library('pagination');
   $config['base_url']=base_url().'special';
   $config['total_rows']=$cavab;
   $config['per_page']='12';
   $config['full_tag_open']='<ul>';
   $config['full_tag_close']='</ul>';
   $config['first_link']='&laquo';
   $config['first_tag_open']='<li';
   $config['first_tag_close']='</li';
   $config['last_link']='&raquo';
   $config['last_tag_open']='<li>';
   $config['last_tag_close']='</li>';
   $config['next_link']='&gt';
   $config['next_tag_open']='<li>';
   $config['next_tag_close']='</li>';
   $config['prev_link']='&gt';
   $config['prev_tag_open']='<li>';
   $config['prev_tag_open']='</li>';
   $config['cur_tag_open']='<li class="active"><span>';
   $config['cur_tag_close']='</span></li>';
   $config['num_tag_open']='<li>';
   $config['num_tag_open']='</li>';
   $this->pagination->initialize($config);
   $data['linkler']=$this->pagination->create_links();
   $data['melumat']=$this->dtbs->specialper($config['per_page'],$this->uri->segment('2,0'));
  $this->load->view('front/special/anasehife',$data);
 }
 public function saat()
 {
 	$cavab=$this->dtbs->katlist('4');
 	$cavab=$this->dtbs->mehsulsayi('4');

   $this->load->library('pagination');
   $config['base_url']=base_url().'saat';
   $config['total_rows']=$cavab;
   $config['per_page']='12';
   $config['full_tag_open']='<ul>';
   $config['full_tag_close']='</ul>';
   $config['first_link']='&laquo';
   $config['first_tag_open']='<li';
   $config['first_tag_close']='</li';
   $config['last_link']='&raquo';
   $config['last_tag_open']='<li>';
   $config['last_tag_close']='</li>';
   $config['next_link']='&gt';
   $config['next_tag_open']='<li>';
   $config['next_tag_close']='</li>';
   $config['prev_link']='&gt';
   $config['prev_tag_open']='<li>';
   $config['prev_tag_open']='</li>';
   $config['cur_tag_open']='<li class="active"><span>';
   $config['cur_tag_close']='</span></li>';
   $config['num_tag_open']='<li>';
   $config['num_tag_open']='</li>';
   $this->pagination->initialize($config);
   $data['linkler']=$this->pagination->create_links();
   $data['melumat']=$this->dtbs->saatper($config['per_page'],$this->uri->segment('2,0'));
  $this->load->view('front/saat/anasehife',$data);
 }public function xususi()
 {
 	$cavab=$this->dtbs->katlist('5');
 	$cavab=$this->dtbs->mehsulsayi('5');

   $this->load->library('pagination');
   $config['base_url']=base_url().'elektronik';
   $config['total_rows']=$cavab;
   $config['per_page']='12';
   $config['full_tag_open']='<ul>';
   $config['full_tag_close']='</ul>';
   $config['first_link']='&laquo';
   $config['first_tag_open']='<li';
   $config['first_tag_close']='</li';
   $config['last_link']='&raquo';
   $config['last_tag_open']='<li>';
   $config['last_tag_close']='</li>';
   $config['next_link']='&gt';
   $config['next_tag_open']='<li>';
   $config['next_tag_close']='</li>';
   $config['prev_link']='&gt';
   $config['prev_tag_open']='<li>';
   $config['prev_tag_open']='</li>';
   $config['cur_tag_open']='<li class="active"><span>';
   $config['cur_tag_close']='</span></li>';
   $config['num_tag_open']='<li>';
   $config['num_tag_open']='</li>';
   $this->pagination->initialize($config);
   $data['linkler']=$this->pagination->create_links();
   $data['melumat']=$this->dtbs->xususigunlerper($config['per_page'],$this->uri->segment('2,0'));
  $this->load->view('front/xususi/anasehife',$data);
 }
public function eynekabout($sef)
{
  $cavab=$this->dtbs->productabout($sef);
  $data['melumat']=$cavab;
  $this->load->view('front/eynek/about/anasehife',$data);
}
public function elektronikabout($sef)
{
 $cavab=$this->dtbs->productabout($sef);
  $data['melumat']=$cavab;
  $this->load->view('front/elektronik/about/anasehife',$data);
}
public function saatabout($sef)
{
 $cavab=$this->dtbs->productabout($sef);
  $data['melumat']=$cavab;
  $this->load->view('front/saat/about/anasehife',$data);
}
public function specialabout($sef)
{
 $cavab=$this->dtbs->productabout($sef);
  $data['melumat']=$cavab;
  $this->load->view('front/special/about/anasehife',$data);
}
public function xususigunlerabout($sef)
{
 $cavab=$this->dtbs->productabout($sef);
  $data['melumat']=$cavab;
  $this->load->view('front/xususi/about/anasehife',$data);
}
public function qeydiyyat()
{
  $this->load->view('front/users/anasehife');
}
public function qeydol()
{
  $this->form_validation->set_rules('adsoyad','adiniz','trim|required|min_length[2]|max_length[15]');
  $this->form_validation->set_rules('email','emailiniz','trim|required|valid_email');
  $this->form_validation->set_rules('sifre','sifre','trim|required|min_length[5]');
  $this->form_validation->set_rules('confirm','sifre tekrari','trim|required|min_length[5]|matches[sifre]');


  $xetalar=array(
            'required'=>'{field} burani bos qoymayin',
            'min_length'=>'{field} minimum 2 herfli olmalidir',
            'valid_email'=>'{field} kecerli bir email qeyd edin',
            'matches'=>'{field} sifreler uygun deyil' 
  );
  $this->form_validation->set_message($xetalar);

  if ($this->form_validation->run()==false) {
    redirect('anasehife/qeydiyyat',$this->session->set_flashdata('xeta','<div class="alert alert-danger"
      <i class="fa fa-exclamation-circle"></i>
      '.$xetalar['xeta']=validation_errors().'

      '));
  }else{
    $data=array(
                 'adsoyad'=>$this->input->post('adsoyad',true),
                 'email'=>$this->input->post('email',true),
                 'unvan'=>$this->input->post('unvan',true),
                 'sifre'=>$this->input->post('sifre',true),
                 'telefon'=>$this->input->post('telefon',true),
                 'dtarix'=>$this->input->post('dogumtarixi',true),
                 'ip'=>$this->input->post('ip'),
                 'seher'=>$this->input->post('seher'),
                 'poct'=>$this->input->post('poctkodu')

    );


  }
  $cavab=$this->dtbs->add('user',$data);
  if($cavab)
          {
           $this->session->set_flashdata('xeta','<div class="alert alert-success"><h4>Qeydiyyatiniz ugurla sonlandi...</h4></div>');
      redirect('anasehife/qeydiyyat');
      
        

          }else{
            $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Qeydiyyat bas tutmadi</h4></div>');
      redirect('anasehife/qeydiyyat');

          }
  }
  public function giris()
  {
    $this->load->view('front/giris/anasehife');
  }
public function usergiris()
{
  $email=$this->input->post('email');
  $sifre=$this->input->post('sifre');
  $kontrol=$this->dtbs->userkontrol($email,$sifre);
  if($kontrol)
  {
    $this->session->set_userdata('usergiris',true);
    $this->session->set_userdata('userinfo',$kontrol);
    redirect('anasehife');
  }else{
    $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Giris bas tutmadi</h4></div>');
    redirect($_SERVER['HTTP_REFERER']);

  }
}
public function cixis()
{
  $this->session->unset_userdata('usergiris');
  redirect('anasehife');
}
public function comments()
{
  $data=array(
            'adsoyad'=>$this->input->post('adsoyad'),
            'comment'=>$this->input->post('yorum'),
            'rating'=>$this->input->post('rating'),
            'mehsul_id'=>$this->input->post('urunid'),
            'url'=>$this->input->post('url'),
            'link'=>$this->input->post('link'),
            'ip'=>$this->input->post('ip'),
            'tarix'=>date('d-m-y'),
            'status'=>1
 
  );
  $cavab=$this->dtbs->add('comments',$data);
  if($cavab)
          {
           $this->session->set_flashdata('xeta','<div class="alert alert-success"><h4>Serhiniz elave edildi...</h4></div>');
      redirect($_SERVER['HTTP_REFERER']);
      
        

          }else{
            $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Sistem xetasi</h4></div>');
      redirect($_SERVER['HTTP_REFERER']);

          }

}
public function search()
{
  $term=$this->input->get('term');
  $rows=$this->dtbs->axtar($term);
  echo json_encode($rows);
}
public function about($sef)
{
  $cavab=$this->dtbs->productabout($sef);
   $data['melumat']=$cavab;
   switch ($cavab->kat_id) {
     case 1:
       $this->eynekabout($sef);
       break;
       case 3:
       $this->elektronikabout($sef);
       break;
       case 4:
         $this->saatabout($sef);
         break;
         case 5:
           $this->xususigunlerabout($sef);
           break;
           case 6:
           $this->specialabout($sef);
           break;
    
   }

}

}