<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('adminlogin') && $this->uri->segment(2)&&$this->uri->segment(2)!='login'){
			redirect('admin');
		}
	}


	public function index()
	{
		if($this->session->userdata('adminlogin'))
		{
                redirect('admin/homepage');
		}
		$this->load->view('back/login');
	}
	public function login()
	{
		$email=$this->input->post('email');
		$sifre=$this->input->post('sifre');
		$cavab=$this->dtbs->kontrol($email,$sifre);
		if ($cavab) {
			$this->session->set_userdata('adminlogin',true);
			$this->session->set_userdata('admininfo',$cavab);
			$data=array('songiris'=>date('Y-m-d H:i:s'));
			$this->dtbs->timeupdate($cavab->id,$data);
			
			redirect('admin/homepage');
		}
		else{
			$this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Xeta!</h4>
               Istifadeci adiniz yanlisdir...
              </div>');
			redirect('admin');
		}
	}
	public function homepage()
	{
	  $this->load->view('back/homepage');
	}
	public function cixis()
	{
		$this->session->unset_userdata('adminlogin');
		redirect('admin');
	}
	public function config()
	{
		$cavab=$this->dtbs->list('config');
		$data['melumat']=$cavab;
		$this->load->view('back/config/config',$data);
	}
	public function editconfig($id)
	{
		$cavab=$this->dtbs->cek($id,'config');
		$data['melumat']=$cavab;
		$this->load->view('back/config/editconfig',$data);
	}
	public function configupdate()
	{
		$data=array
		(
			'id'=>$id=$this->input->post('id'),
			'title'=>$title=$this->input->post('title'),
			'url'=>$url=$this->input->post('url'),
			'telefon'=>$telefon=$this->input->post('phone'),
			'sayt_desc'=>$desc=$this->input->post('desc'),
			'inform'=>$unvan=$this->input->post('unvan'),
			'mail'=>$mail=$this->input->post('mail')
		);
		$cavab=$this->dtbs->update($data,$id,'id','config');
		if ($cavab) {
			$this->session->set_flashdata('success','<div class="alert alert-success"><h4>Sayt ayarlarini deyisdirdiniz...</h4></div>');
			redirect('admin/config');
		}
		else{
			$this->session->set_flashdata('xeta','<div class=alert alert-success>Ayarlariniz deyisidrilmedi</div>');
			redirect('admin/config');
		}
	}
	public function karqolist()
	{
		$cavab=$this->dtbs->list('kaqro');
		$data['melumat']=$cavab;
		$this->load->view('back/karqo/karqo',$data);
	}
	public function karqoadd()
	{
		$this->load->view('back/karqo/karqoadd');
	}
	public function karqoadded()
	{
		$config['upload_path']= FCPATH.'assets/front/image/karqo';
		$config['allowed_types']='gif|jpg|jpeg|png';
		$config['encrypt_name']=TRUE;
		$this->load->library('upload',$config);
		if($this->upload->do_upload('image'))
		{
           $image=$this->upload->data();
           $imagepath=$image['file_name'];
           $imagesave='assets/front/image/karqo/'.$imagepath.'';
           $imagetmb='assets/front/image/karqo/tmb/'.$imagepath.'';
           $imagemini='assets/front/image/karqo/mini/'.$imagepath.'';

           $config['image_library'] ='gd2';
           $config['source_image'] ='assets/front/image/karqo/'.$imagepath.'';
           $config['new_image'] ='assets/front/image/karqo/tmb/'.$imagepath.'';
     	     $config['create_thumb'] =false;
    	     $config['maintain_ratio'] =false;
           $config['quality'] ='60%';
           $config['width'] ='310';
           $config['height'] ='165';
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config1['image_library'] ='gd2';
           $config1['source_image'] ='assets/front/image/karqo/'.$imagepath.'';
           $config1['new_image'] ='assets/front/image/karqo/mini/'.$imagepath.'';
     	     $config1['create_thumb'] =false;
    	     $config1['maintain_ratio'] =false;
           $config1['quality'] ='60%';
           $config1['width'] ='110';
           $config1['height'] ='75';
           $this->load->library('image_lib',$config1);
           $this->image_lib->initialize($config1);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $data=array
           (
           	'title'=>$title=$this->input->post('title'),
           	'sef'=>seflink($title),
           	'status'=>1,
           	'sekil'=>$imagesave,
           	'tmb'=>$imagetmb,
           	'mini'=>$imagemini
           );
          $cavab=$this->dtbs->add('kaqro',$data);

          if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>karqo elave etdiniz...</h4></div>');
			redirect('admin/karqolist');
			
        

          }else{
          	$this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>karqo elave edilmedi</h4></div>');
			redirect('admin/karqolist');

          }

		}else{
			$this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>sekil yuklenmedi</h4></div>');
			redirect('admin/karqolist');

		}
	}
	public function editkarqo($id)
	{
		$cavab=$this->dtbs->cek($id,'kaqro');
		$data['melumat']=$cavab;
		$this->load->view('back/karqo/karqoedit',$data);
		
	}
	public function karqoupdate()
	{
           
		$config['upload_path']= FCPATH.'assets/front/image/karqo';
		$config['allowed_types']='gif|jpg|jpeg|png';
		$config['encrypt_name']=TRUE;
		$this->load->library('upload',$config);
		if($this->upload->do_upload('sekil'))
		{
           $image=$this->upload->data();
           $imagepath=$image['file_name'];
           $imagesave='assets/front/image/karqo/'.$imagepath.'';
           $imagetmb='assets/front/image/karqo/tmb/'.$imagepath.'';
           $imagemini='assets/front/image/karqo/mini/'.$imagepath.'';

           $config['image_library'] ='gd2';
           $config['source_image'] ='assets/front/image/karqo/'.$imagepath.'';
           $config['new_image'] ='assets/front/image/karqo/tmb/'.$imagepath.'';
     	   $config['create_thumb'] =false;
    	   $config['maintain_ratio'] =false;
           $config['quality'] ='60%';
           $config['width'] ='310';
           $config['height'] ='165';
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config1['image_library'] ='gd2';
           $config1['source_image'] ='assets/front/image/karqo/'.$imagepath.'';
           $config1['new_image'] ='assets/front/image/karqo/mini/'.$imagepath.'';
     	     $config1['create_thumb'] =false;
    	     $config1['maintain_ratio'] =false;
           $config1['quality'] ='60%';
           $config1['width'] ='110';
           $config1['height'] ='75';
           $this->load->library('image_lib',$config1);
           $this->image_lib->initialize($config1);
           $this->image_lib->resize();
           $this->image_lib->clear();
            



           $data=array
           (
           	'id'=>$id=$this->input->post('id'),
           	'title'=>$title=$this->input->post('title'),
           	'sef'=>seflink($title),
           	'status'=>1,
           	'sekil'=>$imagesave,
           	'tmb'=>$imagetmb,
           	'mini'=>$imagemini);
           //unlink funksiyasi gelecek
            

          $sil= karqosekil('sekil');
          $sil1= karqotmb('tmb');
           $sil2=karqomini('mini');
           unlink($sil);
           unlink($sil1);
           unlink($sil2);
  

            $cavab=$this->dtbs->update($data,$id,'id','kaqro');
         
	            
          if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>karqo deyisdirdiniz...</h4></div>');
			redirect('admin/karqolist');

          }else{
          	$this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>karqo deyisidrilmedi</h4></div>');
			redirect('admin/karqolist');

          }


	}
//sekilsiz 
	else{

           $data=array
           (
           	'id'=>$id=$this->input->post('id'),
           	'title'=>$title=$this->input->post('title'),
           	'sef'=>seflink($title),
           	'status'=>1
          );

       
            $cavab=$this->dtbs->update($data,$id,'id','kaqro');
	            
          if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>karqo deyisdirdiniz...</h4></div>');
			redirect('admin/karqolist');

         }else{
          	$this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>karqo deyisidrilmedi</h4></div>');
			redirect('admin/karqolist');

          }
			

		}		
}
public function karqodelete($id,$where,$from)
{
 $cavab=$this->dtbs->delete($id,$where,$from);
 if ($cavab) {
        $this->session->set_flashdata('success','<div class="alert alert-success"><h4> Silindi...</h4></div>');
        redirect('admin/karqolist');


   }else{
        $this->session->set_flashdata('xeta','<div class="alert alert-danger"><h4>Silinmedi!!!</h4></div>');
        redirect('admin/karqolist');
       }

}
public function karqodesi()
{
	$cavab=$this->dtbs->list('karqodesi');
	$data['melumat']=$cavab;
	$this->load->view('back/karqodesi/karqodesi',$data);
}
public function karqodesiadd()
{
	$this->load->view('back/karqodesi/karqodesiadd');

}
public function karqodesiadded()
{
	$data=array
	(
		'karqo_id'=>$this->input->post('karqo_id'),
		'qiymet'=>$this->input->post('price')
	);
	$cavab=$this->dtbs->add('karqodesi',$data);
	if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>karqo qiymet elave etdiniz...</h4></div>');
			redirect('admin/karqodesi');
			
        

          }else{
          	$this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>karqo qiymet elave edilmedi</h4></div>');
			redirect('admin/karqodesi');

          }
}
public function editkarqodesi($id)
{
	$cavab=$this->dtbs->cek($id,'karqodesi');
	$data['melumat']=$cavab;
	$this->load->view('back/karqodesi/karqodesiedit',$data);
}
public function karqodesiupdate()
{
	$data=array(

     'id'=>$id=$this->input->post('id'),
     'karqo_id'=>$karqoid=$this->input->post('karqo_id'),
     'qiymet'=>$qiymet=$this->input->post('price')

	);
	$cavab=$this->dtbs->update($data,$id,'id','karqodesi');
	 if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>karqo qiymet deyisdirdiniz...</h4></div>');
			redirect('admin/karqodesi');

          }else{
          	$this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>karqo qiymet deyisidrilmedi</h4></div>');
			redirect('admin/karqodesi');

          }
}
public function karqodesidelete($id,$where,$from)
{
	$cavab=$this->dtbs->delete($id,$where,$from);
	 if ($cavab) {
        $this->session->set_flashdata('success','<div class="alert alert-success"><h4> Silindi...</h4></div>');
        redirect('admin/karqodesi');


   }else{
        $this->session->set_flashdata('success','<div class="alert alert-danger"><h4>Silinmedi!!!</h4></div>');
        redirect('admin/karqodesi');
       }

}
public function bank()
{
	$cavab=$this->dtbs->list('bank');
	$data['melumat']=$cavab;
	$this->load->view('back/bank/bank',$data);
}
public function bankadd()
{
	$this->load->view('back/bank/bankadd');
}
public function bankadded()
{
	$config['upload_path']= FCPATH.'assets/front/image/bank';
		$config['allowed_types']='gif|jpg|jpeg|png';
		$config['encrypt_name']=TRUE;
		$this->load->library('upload',$config);
		if($this->upload->do_upload('image'))
		{
           $image=$this->upload->data();
           $imagepath=$image['file_name'];
           $imagesave='assets/front/image/bank/'.$imagepath.'';
           $imagetmb='assets/front/image/bank/tmb/'.$imagepath.'';
           $imagemini='assets/front/image/bank/mini/'.$imagepath.'';

           $config['image_library'] ='gd2';
           $config['source_image'] ='assets/front/image/bank/'.$imagepath.'';
           $config['new_image'] ='assets/front/image/bank/tmb/'.$imagepath.'';
     	   $config['create_thumb'] =false;
    	   $config['maintain_ratio'] =false;
           $config['quality'] ='60%';
           $config['width'] ='310';
           $config['height'] ='165';
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config1['image_library'] ='gd2';
           $config1['source_image'] ='assets/front/image/bank/'.$imagepath.'';
           $config1['new_image'] ='assets/front/image/bank/mini/'.$imagepath.'';
     	   $config1['create_thumb'] =false;
    	   $config1['maintain_ratio'] =false;
           $config1['quality'] ='60%';
           $config1['width'] ='110';
           $config1['height'] ='75';
           $this->load->library('image_lib',$config1);
           $this->image_lib->initialize($config1);
           $this->image_lib->resize();
           $this->image_lib->clear();


            $data=array
            (
            	'title'=>$title=$this->input->post('title'),
            	'sobe'=>$sobe=$this->input->post('sobe'),
            	'iban'=>$iban=$this->input->post('iban'),
            	'hesab'=>$title=$this->input->post('hesab'),
            	'sekil'=>$imagesave,
            	'tmb'=>$imagetmb,
            	'mini'=>$imagemini

            );
            $cavab=$this->dtbs->add('bank',$data);

          if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>bank elave etdiniz...</h4></div>');
			redirect('admin/bank');
			
        

          }else{
          	$this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>bank elave edilmedi</h4></div>');
			redirect('admin/bank');

          }



}else{
	$this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>sekil yuklenmedi</h4></div>');
			redirect('admin/bank');
}

}
public function bankedit($id)
{
	$cavab=$this->dtbs->cek($id,'bank');
	$data['melumat']=$cavab;
	$this->load->view('back/bank/bankedit',$data);

}
public function bankupdate()
{
	$config['upload_path']= FCPATH.'assets/front/image/bank';
		$config['allowed_types']='gif|jpg|jpeg|png';
		$config['encrypt_name']=TRUE;
		$this->load->library('upload',$config);
		if($this->upload->do_upload('image'))
		{
           $image=$this->upload->data();
           $imagepath=$image['file_name'];
           $imagesave='assets/front/image/bank/'.$imagepath.'';
           $imagetmb='assets/front/image/bank/tmb/'.$imagepath.'';
           $imagemini='assets/front/image/bank/mini/'.$imagepath.'';

           $config['image_library'] ='gd2';
           $config['source_image'] ='assets/front/image/bank/'.$imagepath.'';
           $config['new_image'] ='assets/front/image/bank/tmb/'.$imagepath.'';
     	   $config['create_thumb'] =false;
    	   $config['maintain_ratio'] =false;
           $config['quality'] ='60%';
           $config['width'] ='310';
           $config['height'] ='165';
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config1['image_library'] ='gd2';
           $config1['source_image'] ='assets/front/image/bank/'.$imagepath.'';
           $config1['new_image'] ='assets/front/image/bank/mini/'.$imagepath.'';
     	   $config1['create_thumb'] =false;
    	   $config1['maintain_ratio'] =false;
           $config1['quality'] ='60%';
           $config1['width'] ='110';
           $config1['height'] ='75';
           $this->load->library('image_lib',$config1);
           $this->image_lib->initialize($config1);
           $this->image_lib->resize();
           $this->image_lib->clear();


           $data=array
           (
           	  'id'=>$id=$this->input->post('id'),
           	  'title'=>$title=$this->input->post('title'),
           	  'sobe'=>$sobe=$this->input->post('sobe'),
           	  'iban'=>$iban=$this->input->post('iban'),
           	  'hesab'=>$hesab=$this->input->post('hesab'),
           	  'sekil'=>$imagesave,
           	  'tmb'=>$imagetmb,
           	  'mini'=>$imagekarqodeletemini
           );


           $cavab=$this->dtbs->update($data,$id,'id','bank');
           if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>bank deyisdirdiniz...</h4></div>');
			redirect('admin/bank');
			
        

          }else{
          	$this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>bank deyisdirilmedi</h4></div>');
			redirect('admin/bank');

          }
}else{
       $data=array
	(
	          'id'=>$id=$this->input->post('id'),
           	  'title'=>$title=$this->input->post('title'),
           	  'sobe'=>$sobe=$this->input->post('sobe'),
           	  'iban'=>$iban=$this->input->post('iban'),
           	  'hesab'=>$hesab=$this->input->post('hesab')
	    );
	$cavab=$this->dtbs->update($data,$id,'id','bank');
	if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>bank deyisdirdiniz...</h4></div>');
			redirect('admin/bank');
			
        

          }else{
          	$this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>bank deyisdirilmedi</h4></div>');
			redirect('admin/bank');

          }

}

}
public function bankdelete($id,$where,$from)
{
	$cavab=$this->dtbs->delete($id,$where,$from);
	if ($cavab) {
		$this->session->set_flashdata('success','<div class="alert alert-success"<h4>Bank emeliyyatini sildiniz!!!</h4></div>');
		redirect('admin/bank');
	}
	else{
		$this->session->set_flashdata('xeta','<div class="alert-alert-success"><h4>Silimedi...</h4>
			</div>');
		redirect('admin/bank');
	}

}
public function gizlilik()
{
  $cavab=$this->dtbs->list('gizlilik');
  $data['melumat']=$cavab;
  $this->load->view('back/gizlilik/gizlilik',$data);
}
public function gizlilikadd()
{
  $this->load->view('back/gizlilik/gizlilikadd');
}
public function gizlilikadded()
{
  $data=array
  (
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'description'=>$this->input->post('description')
    );
  $cavab=$this->dtbs->add('gizlilik',$data);
  if ($cavab) {
    $this->session->set_flashdata('success','<div class="alert alert-success"<h4>Muqavile elave edildi!!!</h4></div>');
    redirect('admin/gizlilik');
  }
  else{
    $this->session->set_flashdata('xeta','<div class="alert-alert-success"><h4>muqavil elave edilmedi...</h4>
      </div>');
    redirect('admin/gizlilik');
  }
}
public function gizlilikedit($id)
{
  $cavab=$this->dtbs->cek($id,'gizlilik');
  $data['melumat']=$cavab;
  $this->load->view('back/gizlilik/gizlilikedit',$data);

}
public function gizlilikupdate()
{
  $data=array
  (
    'id'=>$id=$this->input->post('id'),
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'description'=>$this->input->post('description')


      );
  $cavab=$this->dtbs->update($data,$id,'id','gizlilik');
  if ($cavab) {
    $this->session->set_flashdata('success','<div class="alert alert-success"<h4>Muqavile deyisildi!!!</h4></div>');
    redirect('admin/gizlilik');
  }
  else{
    $this->session->set_flashdata('xeta','<div class="alert-alert-success"><h4>muqavile deyisdirilmedi...</h4>
      </div>');
    redirect('admin/gizlilik');
  }

}
public function gizlilikdelete($id,$where,$from)
{
  $cavab=$this->dtbs->delete($id,$where,$from);
  if ($cavab) {
    $this->session->set_flashdata('success','<div class="alert alert-success"<h4>Muqavile silindi!!!</h4></div>');
    redirect('admin/gizlilik');
  }
  else{
    $this->session->set_flashdata('xeta','<div class="alert-alert-success"><h4>muqavile silinmedi...</h4>
      </div>');
    redirect('admin/gizlilik');
  }
}
public function satis()
{

  $cavab=$this->dtbs->list('satis');
  $data['melumat']=$cavab;
  $this->load->view('back/satis/satis',$data);
}


public function satisedit($id)
{
  $cavab=$this->dtbs->cek($id,'satis');
  $data['melumat']=$cavab;
  $this->load->view('back/satis/satisedit',$data);

}
public function satisupdate()
{
  $data=[
    'id'=>$id=$this->input->post('id'),
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink('title'),
    'description'=>$this->input->post('description')

  ];
  $cavab=$this->dtbs->update($data,$id,'id','satis');
  if ($cavab) {
    $this->session->set_flashdata('success','<div class="alert alert-success"<h4>satis Muqavile deysiildi!!!</h4></div>');
    redirect('admin/satis');
  }
  else{
    $this->session->set_flashdata('xeta','<div class="alert-alert-success"><h4> satis muqavilesi deyisildi...</h4>
      </div>');
    redirect('admin/satis');
  }

}
public function suallar()
{
  $cavab=$this->dtbs->list('suallar');
  $data['melumat']=$cavab;
  $this->load->view('back/suallar/sual',$data);
}
public function sualadd()
{
  $this->load->view('back/suallar/sualadd');
}
public function sualadded()
{
  $data=array
  (
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'description'=>$description=$this->input->post('description'),
    'status'=>1


  );
  $cavab=$this->dtbs->add('suallar',$data);
  if ($cavab) {
    $this->session->set_flashdata('success','<div class="alert alert-success"<h4>Sual elave edildi!!!</h4></div>');
    redirect('admin/suallar');
  }
  else{
    $this->session->set_flashdata('xeta','<div class="alert-alert-success"><h4> sual elave edilmedi...</h4>
      </div>');
    redirect('admin/suallar');
  }

}
public function sualedit($id)
{
  $cavab=$this->dtbs->cek($id,'suallar');
  $data['melumat']=$cavab;
  $this->load->view('back/suallar/sualedit',$data);
}
public function sualupdate()
{
  $data=array(
    'id'=>$id=$this->input->post('id'),
  'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'description'=>$description=$this->input->post('description')
  );
  $cavab=$this->dtbs->update($data,$id,'id','suallar');
  if ($cavab) {
    $this->session->set_flashdata('success','<div class="alert alert-success"<h4>Sual deyisdiildi!!!</h4></div>');
    redirect('admin/suallar');
  }
  else{
    $this->session->set_flashdata('xeta','<div class="alert-alert-success"><h4> sual deyisdirilmedi...</h4>
      </div>');
    redirect('admin/suallar');
  }

}
public function sualdelete($id,$where,$from)
{
  $cavab=$this->dtbs->delete($id,$where,$from);
  if ($cavab) {
    $this->session->set_flashdata('success','<div class="alert alert-success"<h4>Sual silindi!!!</h4></div>');
    redirect('admin/suallar');
  }
  else{
    $this->session->set_flashdata('xeta','<div class="alert-alert-success"><h4>Sial silinmedi...</h4>
      </div>');
    redirect('admin/suallar');
  }

}
public function qaranti()
{
  $cavab=$this->dtbs->list('qaranti');
  $data['melumat']=$cavab;
  $this->load->view('back/qaranti/qaranti',$data);
}
public function qarantiedit($id)
{
  $cavab=$this->dtbs->cek($id,'qaranti');
  $data['melumat']=$cavab;
  $this->load->view('back/qaranti/qarantiedit',$data);

}
public function qarantiupdate()
{
  $data=array
  (
    'id'=>$id=$this->input->post('id'),
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'description'=>$description=$this->input->post('description')
  );
  $cavab=$this->dtbs->update($data,$id,'id','qaranti');
  if ($cavab) {
    $this->session->set_flashdata('success','<div class="alert alert-success"<h4>Qaranti muqavilesi deyisdiildi!!!</h4></div>');
    redirect('admin/qaranti');
  }
  else{
    $this->session->set_flashdata('xeta','<div class="alert-alert-success"><h4>Qaranti muqavilesi deyisidrilmedi...</h4>
      </div>');
    redirect('admin/qaranti');
}
} 
public function smedia()
{
  $cavab=$this->dtbs->list('smedia');
  $data['melumat']=$cavab;
  $this->load->view('back/smedia/smedia',$data);
}

public function smediaadd()
{
  $this->load->view('back/smedia/smediaadd');
}
public function smediaadded()
{
  $data=array
  (
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'url'=>$url=$this->input->post('url'),
    'status'=>1
  );
  $cavab=$this->dtbs->add('smedia',$data);

          if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Sosial media elave etdiniz...</h4></div>');
      redirect('admin/smedia');
      
        

          }else{
            $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Sosial media elave  edilmedi</h4></div>');
      redirect('admin/smedia');

          }

}
public function smediaedit($id)
{
  $cavab=$this->dtbs->cek($id,'smedia');
  $data['melumat']=$cavab;
  $this->load->view('back/smedia/smediaedit',$data);
}
public function smediaupdate()
{
  $data=
  [
    'id'=>$id=$this->input->post('id'),
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'url'=>$url=$this->input->post('url'),
    'status'=>1
  ];
  $cavab=$this->dtbs->update($data,$id,'id','smedia');
   if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Sosial media deyisdirdiniz...</h4></div>');
      redirect('admin/smedia');
      
        

          }else{
            $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Sosial media deyisidrilmedi</h4></div>');
      redirect('admin/smedia');

          }
}
public function smediadelete($id,$where,$from)
{
 $cavab=$this->dtbs->delete($id,$where,$from);
  if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Sosial media sildiniz...</h4></div>');
      redirect('admin/smedia');
      
        

          }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger"><h4>Sosial media silindi</h4></div>');
      redirect('admin/smedia');

          }

}
public function mehsullar()
{
  $cavab=$this->dtbs->list('products');
  $data['melumat']=$cavab;
  $this->load->view('back/mehsullar/mehsullar',$data);
}
public function mehsuladd()
{
  $this->load->view('back/mehsullar/mehsuladd');
}
public function mehsuladded()
{
  $config['upload_path']=FCPATH.'assets/front/image/mehsullar';
  $config['allowed_types']='gif|jpg|jpeg|png';
  $config['encrypt_name']=true;
  $this->load->library('upload',$config);
  $this->upload->do_upload('sekil1');
  $sekil=$this->upload->data();
  $sekilyolu=$sekil['file_name'];
  $sekilqeyd='assets/front/image/mehsullar/'.$sekilyolu.'';
  $sekiltmb='assets/front/image/mehsullar/tmb1/'.$sekilyolu.'';
  $sekilmini='assets/front/image/mehsullar/mini1/'.$sekilyolu.'';

           $config['image_library'] ='gd2';
           $config['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu.'';
           $config['new_image'] ='assets/front/image/mehsullar/tmb1/'.$sekilyolu.'';
           $config['create_thumb'] =false;
           $config['maintain_ratio'] =false;
           $config['quality'] ='60%';
           $config['width'] ='420';
           $config['height'] ='213';
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config1['image_library'] ='gd2';
           $config1['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu.'';
          $config1['new_image'] ='assets/front/image/mehsullar/mini1/'.$sekilyolu.'';
           $config1['create_thumb'] =false;
           $config1['maintain_ratio'] =false;
           $config1['quality'] ='60%';
           $config1['width'] ='110';
           $config1['height'] ='75';
           $this->load->library('image_lib',$config1);
           $this->image_lib->initialize($config1);
           $this->image_lib->resize();
           $this->image_lib->clear();
  //resim1 biti2
  //resim2 baslangix
           $config2['upload_path']=FCPATH.'assets/front/image/mehsullar';
  $config2['allowed_types']='gif|jpg|jpeg|png';
  $config2['encrypt_name']=true;
  $this->load->library('upload',$config2);
  $this->upload->do_upload('sekil2');
  $sekil2=$this->upload->data();
  $sekilyolu2=$sekil2['file_name'];
  $sekilqeyd2='assets/front/image/mehsullar/'.$sekilyolu2.'';
  $sekiltmb2='assets/front/image/mehsullar/tmb2/'.$sekilyolu2.'';
  $sekilmini2='assets/front/image/mehsullar/mini2/'.$sekilyolu2.'';

           $config2['image_library'] ='gd2';
           $config2['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu2.'';
           $config2['new_image'] ='assets/front/image/mehsullar/tmb2/'.$sekilyolu2.'';
           $config2['create_thumb'] =false;
           $config2['maintain_ratio'] =false;
           $config2['quality'] ='60%';
           $config2['width'] ='420';
           $config2['height'] ='213';
           $this->load->library('image_lib',$config2);
           $this->image_lib->initialize($config2);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config3['image_library'] ='gd2';
           $config3['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu2.'';
          $config3['new_image'] ='assets/front/image/mehsullar/mini2/'.$sekilyolu2.'';
           $config3['create_thumb'] =false;
           $config3['maintain_ratio'] =false;
           $config3['quality'] ='60%';
           $config3['width'] ='110';
           $config3['height'] ='75';
           $this->load->library('image_lib',$config3);
           $this->image_lib->initialize($config3);
           $this->image_lib->resize();
           $this->image_lib->clear();
  

  

  //sekil2 bitis
  //sekil3 baslangic
            $config4['upload_path']=FCPATH.'assets/front/image/mehsullar';
  $config4['allowed_types']='gif|jpg|jpeg|png';
  $config4['encrypt_name']=true;
  $this->load->library('upload',$config4);
  $this->upload->do_upload('sekil3');
  $sekil3=$this->upload->data();
  $sekilyolu3=$sekil3['file_name'];
  $sekilqeyd3='assets/front/image/mehsullar/'.$sekilyolu3.'';
  $sekiltmb3='assets/front/image/mehsullar/tmb4/'.$sekilyolu3.'';
  $sekilmini3='assets/front/image/mehsullar/mini3/'.$sekilyolu3.'';

           $config4['image_library'] ='gd2';
           $config4['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu3.'';
           $config4['new_image'] ='assets/front/image/mehsullar/tmb3/'.$sekilyolu3.'';
           $config4['create_thumb'] =false;
           $config4['maintain_ratio'] =false;
           $config4['quality'] ='60%';
           $config4['width'] ='420';
           $config4['height'] ='213';
           $this->load->library('image_lib',$config4);
           $this->image_lib->initialize($config4);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config5['image_library'] ='gd2';
           $config5['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu3.'';
          $config5['new_image'] ='assets/front/image/mehsullar/mini3/'.$sekilyolu3.'';
           $config5['create_thumb'] =false;
           $config5['maintain_ratio'] =false;
           $config5['quality'] ='60%';
           $config5['width'] ='110';
           $config5['height'] ='75';
           $this->load->library('image_lib',$config5);
           $this->image_lib->initialize($config5);
           $this->image_lib->resize();
           $this->image_lib->clear();
  
  
  //resim3 bitis
  //sekil4 baslangic
            $config6['upload_path']=FCPATH.'assets/front/image/mehsullar';
  $config6['allowed_types']='gif|jpg|jpeg|png';
  $config6['encrypt_name']=true;
  $this->load->library('upload',$config6);
  $this->upload->do_upload('sekil4');
  $sekil4=$this->upload->data();
  $sekilyolu4=$sekil4['file_name'];
  $sekilqeyd4='assets/front/image/mehsullar/'.$sekilyolu4.'';
  $sekiltmb4='assets/front/image/mehsullar/tmb4/'.$sekilyolu4.'';
  $sekilmini4='assets/front/image/mehsullar/mini4/'.$sekilyolu4.'';

           $config6['image_library'] ='gd2';
           $config6['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu4.'';
           $config6['new_image'] ='assets/front/image/mehsullar/tmb4/'.$sekilyolu4.'';
           $config6['create_thumb'] =false;
           $config6['maintain_ratio'] =false;
           $config6['quality'] ='60%';
           $config6['width'] ='420';
           $config6['height'] ='213';
           $this->load->library('image_lib',$config6);
           $this->image_lib->initialize($config6);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config7['image_library'] ='gd2';
           $config7['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu4.'';
           $config7['new_image'] ='assets/front/image/mehsullar/mini4/'.$sekilyolu4.'';
           $config7['create_thumb'] =false;
           $config7['maintain_ratio'] =false;
           $config7['quality'] ='60%';
           $config7['width'] ='110';
           $config7['height'] ='75';
           $this->load->library('image_lib',$config7);
           $this->image_lib->initialize($config7);
           $this->image_lib->resize();
           $this->image_lib->clear();



  $data=array
  (
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'kat_id'=>$katid=$this->input->post('kat_id'),
    'price'=>$price=$this->input->post('qiymet'),
    'status'=>1,
    'date'=>$tarix=$this->input->post('tarix'),
    'melumat'=>$title=$this->input->post('melumat'),
    'description'=>$title=$this->input->post('aciqlama'),
    'image1'=>$sekilqeyd,
    'tmb1'=>$sekiltmb,
    'mini1'=>$sekilmini,

    'image2'=>$sekilqeyd2,
    'tmb2'=>$sekiltmb2,
    'mini2'=>$sekilmini2,

        'image3'=>$sekilqeyd3,
    'tmb3'=>$sekiltmb3,
    'mini3'=>$sekilmini3,

     'image4'=>$sekilqeyd4,
    'tmb4'=>$sekiltmb4,
    'mini4'=>$sekilmini4

   
  );
  $cavab=$this->dtbs->add('products',$data);
   if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Mehsul elave etdiniz...</h4></div>');
      redirect('admin/mehsullar');
      
        

          }else{
            $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Mehsul elave edilmedi</h4></div>');
      redirect('admin/mehsullar');

          }
}
public function editproduct($id)
{
  $cavab=$this->dtbs->cek($id,'products');
  $data['melumat']=$cavab;
  $this->load->view('back/mehsullar/mehsuledit',$data);
}
public function mehsulupdate()
{
  if(strlen($_FILES['sekil1']['name'])>0){
$config['upload_path']=FCPATH.'assets/front/image/mehsullar';
  $config['allowed_types']='gif|jpg|jpeg|png';
  $config['encrypt_name']=true;
  $this->load->library('upload',$config);
  $this->upload->do_upload('sekil1');
  $sekil=$this->upload->data();
  $sekilyolu=$sekil['file_name'];
  $sekilqeyd='assets/front/image/mehsullar/'.$sekilyolu.'';
  $sekiltmb='assets/front/image/mehsullar/tmb1/'.$sekilyolu.'';
  $sekilmini='assets/front/image/mehsullar/mini1/'.$sekilyolu.'';

           $config['image_library'] ='gd2';
           $config['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu.'';
           $config['new_image'] ='assets/front/image/mehsullar/tmb1/'.$sekilyolu.'';
           $config['create_thumb'] =false;
           $config['maintain_ratio'] =false;
           $config['quality'] ='60%';
           $config['width'] ='420';
           $config['height'] ='213';
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config1['image_library'] ='gd2';
           $config1['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu.'';
          $config1['new_image'] ='assets/front/image/mehsullar/mini1/'.$sekilyolu.'';
           $config1['create_thumb'] =false;
           $config1['maintain_ratio'] =false;
           $config1['quality'] ='60%';
           $config1['width'] ='110';
           $config1['height'] ='75';
           $this->load->library('image_lib',$config1);
           $this->image_lib->initialize($config1);
           $this->image_lib->resize();
           $this->image_lib->clear();
$data=array(
    'id'=>$id=$this->input->post('id'),
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'kat_id'=>$katid=$this->input->post('kat_id'),
    'price'=>$price=$this->input->post('qiymet'),
    'status'=>1,
    'date'=>$tarix=$this->input->post('tarix'),
    'melumat'=>$title=$this->input->post('melumat'),
    'description'=>$title=$this->input->post('aciqlama'),
    'image1'=>$sekilqeyd,
    'tmb1'=>$sekiltmb,
    'mini1'=>$sekilmini
  );
$yol=mehsulsekil($id);
$yol1=mehsultmb($id);
$yol2=mehsulmini($id);
unlink($yol);
unlink($yol1);
unlink($yol2);

           $cavab=$this->dtbs->update($data,$id,'id','products');
            if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Mehsul deyisdildi...</h4></div>');
      redirect('admin/mehsullar');
      
        

          }else{
            $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Mehsul deyisdirilmedi</h4></div>');
      redirect('admin/mehsullar');

          }



  }elseif (strlen($_FILES['sekil2']['name'])>0) {
     $config2['upload_path']=FCPATH.'assets/front/image/mehsullar';
  $config2['allowed_types']='gif|jpg|jpeg|png';
  $config2['encrypt_name']=true;
  $this->load->library('upload',$config2);
  $this->upload->do_upload('sekil2');
  $sekil2=$this->upload->data();
  $sekilyolu2=$sekil2['file_name'];
  $sekilqeyd2='assets/front/image/mehsullar/'.$sekilyolu2.'';
  $sekiltmb2='assets/front/image/mehsullar/tmb2/'.$sekilyolu2.'';
  $sekilmini2='assets/front/image/mehsullar/mini2/'.$sekilyolu2.'';

           $config2['image_library'] ='gd2';
           $config2['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu2.'';
           $config2['new_image'] ='assets/front/image/mehsullar/tmb2/'.$sekilyolu2.'';
           $config2['create_thumb'] =false;
           $config2['maintain_ratio'] =false;
           $config2['quality'] ='60%';
           $config2['width'] ='420';
           $config2['height'] ='213';
           $this->load->library('image_lib',$config2);
           $this->image_lib->initialize($config2);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config3['image_library'] ='gd2';
           $config3['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu2.'';
          $config3['new_image'] ='assets/front/image/mehsullar/mini2/'.$sekilyolu2.'';
           $config3['create_thumb'] =false;
           $config3['maintain_ratio'] =false;
           $config3['quality'] ='60%';
           $config3['width'] ='110';
           $config3['height'] ='75';
           $this->load->library('image_lib',$config3);
           $this->image_lib->initialize($config3);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $data=array(
    'id'=>$id=$this->input->post('id'),
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'kat_id'=>$katid=$this->input->post('kat_id'),
    'price'=>$price=$this->input->post('qiymet'),
    'status'=>1,
    'date'=>$tarix=$this->input->post('tarix'),
    'melumat'=>$title=$this->input->post('melumat'),
    'description'=>$title=$this->input->post('aciqlama'),
    'image2'=>$sekilqeyd2,
    'tmb2'=>$sekiltmb2,
    'mini2'=>$sekilmini2
  );
$yol3=mehsulsekil2($id);
$yol4=mehsultmb2($id);
$yol5=mehsulmini2($id);
unlink($yo3);
unlink($yol4);
unlink($yol5);

           $cavab=$this->dtbs->update($data,$id,'id','products');
            if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Mehsul deyisdildi...</h4></div>');
      redirect('admin/mehsullar');
      
        

          }else{
            $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Mehsul deyisdirilmedi</h4></div>');
      redirect('admin/mehsullar');

          }
  

    
  }elseif (strlen($_FILES['sekil3']['name'])>0) {
      $config4['upload_path']=FCPATH.'assets/front/image/mehsullar';
  $config4['allowed_types']='gif|jpg|jpeg|png';
  $config4['encrypt_name']=true;
  $this->load->library('upload',$config4);
  $this->upload->do_upload('sekil3');
  $sekil3=$this->upload->data();
  $sekilyolu3=$sekil3['file_name'];
  $sekilqeyd3='assets/front/image/mehsullar/'.$sekilyolu3.'';
  $sekiltmb3='assets/front/image/mehsullar/tmb4/'.$sekilyolu3.'';
  $sekilmini3='assets/front/image/mehsullar/mini3/'.$sekilyolu3.'';

           $config4['image_library'] ='gd2';
           $config4['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu3.'';
           $config4['new_image'] ='assets/front/image/mehsullar/tmb3/'.$sekilyolu3.'';
           $config4['create_thumb'] =false;
           $config4['maintain_ratio'] =false;
           $config4['quality'] ='60%';
           $config4['width'] ='420';
           $config4['height'] ='213';
           $this->load->library('image_lib',$config4);
           $this->image_lib->initialize($config4);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config5['image_library'] ='gd2';
           $config5['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu3.'';
          $config5['new_image'] ='assets/front/image/mehsullar/mini3/'.$sekilyolu3.'';
           $config5['create_thumb'] =false;
           $config5['maintain_ratio'] =false;
           $config5['quality'] ='60%';
           $config5['width'] ='110';
           $config5['height'] ='75';
           $this->load->library('image_lib',$config5);
           $this->image_lib->initialize($config5);
           $this->image_lib->resize();
           $this->image_lib->clear();


           $data=array(
    'id'=>$id=$this->input->post('id'),
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'kat_id'=>$katid=$this->input->post('kat_id'),
    'price'=>$price=$this->input->post('qiymet'),
    'status'=>1,
    'date'=>$tarix=$this->input->post('tarix'),
    'melumat'=>$title=$this->input->post('melumat'),
    'description'=>$title=$this->input->post('aciqlama'),
    'image3'=>$sekilqeyd3,
    'tmb3'=>$sekiltmb3,
    'mini3'=>$sekilmini3
  );
$yol6=mehsulsekil3($id);
$yol7=mehsultmb3($id);
$yol8=mehsulmini3($id);
unlink($yo6);
unlink($yol7);
unlink($yol8);

           $cavab=$this->dtbs->update($data,$id,'id','products');
            if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Mehsul deyisdildi...</h4></div>');
      redirect('admin/mehsullar');
      
        

          }else{
            $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Mehsul deyisdirilmedi</h4></div>');
      redirect('admin/mehsullar');

          }
  


    
  }elseif (strlen($_FILES['sekil4']['name'])>0) {
    $config6['upload_path']=FCPATH.'assets/front/image/mehsullar';
  $config6['allowed_types']='gif|jpg|jpeg|png';
  $config6['encrypt_name']=true;
  $this->load->library('upload',$config6);
  $this->upload->do_upload('sekil4');
  $sekil4=$this->upload->data();
  $sekilyolu4=$sekil4['file_name'];
  $sekilqeyd4='assets/front/image/mehsullar/'.$sekilyolu4.'';
  $sekiltmb4='assets/front/image/mehsullar/tmb4/'.$sekilyolu4.'';
  $sekilmini4='assets/front/image/mehsullar/mini4/'.$sekilyolu4.'';

           $config6['image_library'] ='gd2';
           $config6['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu4.'';
           $config6['new_image'] ='assets/front/image/mehsullar/tmb4/'.$sekilyolu4.'';
           $config6['create_thumb'] =false;
           $config6['maintain_ratio'] =false;
           $config6['quality'] ='60%';
           $config6['width'] ='420';
           $config6['height'] ='213';
           $this->load->library('image_lib',$config6);
           $this->image_lib->initialize($config6);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $config7['image_library'] ='gd2';
           $config7['source_image'] ='assets/front/image/mehsullar/'.$sekilyolu4.'';
           $config7['new_image'] ='assets/front/image/mehsullar/mini4/'.$sekilyolu4.'';
           $config7['create_thumb'] =false;
           $config7['maintain_ratio'] =false;
           $config7['quality'] ='60%';
           $config7['width'] ='110';
           $config7['height'] ='75';
           $this->load->library('image_lib',$config7);
           $this->image_lib->initialize($config7);
           $this->image_lib->resize();
           $this->image_lib->clear();


           $data=array(
    'id'=>$id=$this->input->post('id'),
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'kat_id'=>$katid=$this->input->post('kat_id'),
    'price'=>$price=$this->input->post('qiymet'),
    'status'=>1,
    'date'=>$tarix=$this->input->post('tarix'),
    'melumat'=>$title=$this->input->post('melumat'),
    'description'=>$title=$this->input->post('aciqlama'),
    'image4'=>$sekilqeyd4,
    'tmb4'=>$sekiltmb4,
    'mini4'=>$sekilmini4
  );
$yol9=mehsulsekil4($id);
$yol10=mehsultmb4($id);
$yol11=mehsulmini4($id);
unlink($yo9);
unlink($yol10);
unlink($yol11);

           $cavab=$this->dtbs->update($data,$id,'id','products');
            if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Mehsul deyisdildi...</h4></div>');
      redirect('admin/mehsullar');
      
        

          }else{
            $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Mehsul deyisdirilmedi</h4></div>');
      redirect('admin/mehsullar');

          }
  


    
  }else{

           $data=array(
    'id'=>$id=$this->input->post('id'),
    'title'=>$title=$this->input->post('title'),
    'sef'=>seflink($title),
    'kat_id'=>$katid=$this->input->post('kat_id'),
    'price'=>$price=$this->input->post('qiymet'),
    'status'=>1,
    'date'=>$tarix=$this->input->post('tarix'),
    'melumat'=>$title=$this->input->post('melumat'),
    'description'=>$title=$this->input->post('aciqlama')
    

  );
            $cavab=$this->dtbs->update($data,$id,'id','products');
            if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Mehsul deyisdildi...</h4></div>');
      redirect('admin/mehsullar');
      
        

          }else{
            $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Mehsul deyisdirilmedi</h4></div>');
      redirect('admin/mehsullar');

          }

  }
}

  public function productdelete($id,$where,$from)
{
$yol=mehsulsekil($id);
$yol1=mehsultmb($id);
$yol2=mehsulmini($id);
$yol3=mehsulsekil2($id);
$yol4=mehsultmb2($id);
$yol5=mehsulmini2($id);
$yol6=mehsulsekil3($id);
$yol7=mehsultmb3($id);
$yol8=mehsulmini3($id);
$yol9=mehsulsekil4($id);
$yol10=mehsultmb4($id);
$yol11=mehsulmini4($id);
unlink($yol);
unlink($yol1);
unlink($yol2);
unlink($yol3);
unlink($yol4);
unlink($yol5);
unlink($yol6);
unlink($yol7);
unlink($yol8);
unlink($yol9);
unlink($yol10);
unlink($yol11);


$cavab=$this->dtbs->delete($id,$where,$from);
if($cavab)
          {
           $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Silindi...</h4></div>');
      redirect('admin/mehsullar');
      
        

          }else{
            $this->session->set_flashdata('xeta','<div class=alert alert-danger><h4>Silinmedi</h4></div>');
      redirect('admin/mehsullar');

          }

}
public function mesajlar()
{
  $cavab=$this->dtbs->list('mesajlar');
  $data['melumat']=$cavab;
  $this->load->view('back/mesajlar/mesajlar',$data);
}
public function mesajedit($id)
{
  $data=array(
           'status'=>1
  );
  $this->dtbs->mesajupdate($id,$data);
  $cavab=$this->dtbs->cek($id,'mesajlar');
  $data['melumat']=$cavab;
  $this->load->view('back/mesajlar/mesajread',$data);

}
public function users()
{
  $cavab=$this->dtbs->list('user');
  $data['melumat']=$cavab;
  $this->load->view('back/users/users',$data);
}
public function useredit($id)
{
 $cavab=$this->dtbs->cek($id,'user');
 $data['melumat']=$cavab;
 $this->load->view('back/users/useredit',$data);
}
public function comments()
{
  $cavab=$this->dtbs->list('comments');
  $data['melumat']=$cavab;
  $this->load->view('back/comments/comments',$data);
}
public function commentedit($id)
{
  $cavab=$this->dtbs->cek($id,'comments');
  $data['melumat']=$cavab;
  $this->load->view('back/comments/commentedit',$data);

}

}