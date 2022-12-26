<?php  

	namespace App\Controllers;
	use CodeIgniter\Files\File;

	class Setting extends BaseController{
		public function __construct(){
	        $this->model = model( 'App\Models\SettingModel' );
	    }

		public function index(){
			
			$this->data[ 'pageTitle' ] = lang( 'PageTitle.setting' );
			
			return $this->view( 'setting' ); 
		}

		public function change(){
			$this->validate([
            	'logo' => 'uploaded[logo]|max_size[logo,1024]'
                           . '|mime_in[logo,image/png]'
                           . '|ext_in[logo,png]|max_dims[logo,200,150]',
        	]);
			$i= 1;
			$img = $this->request->getFile( 'logo' );
			// $userss= session()->get( 'userData' )->id ;
			// echo $userss;die;
			$styles =
			[
				'backgroundColorNav'	=> $this->request->getVar( 'backgroundColorNav' ),
				'backgroundColorBody'	=> $this->request->getVar( 'backgroundColorBody' ),
				'primaryColor'			=> $this->request->getVar( 'primaryColor' ),
				'secondaryColor'		=> $this->request->getVar( 'secondaryColor' ),
			] ;
			foreach($styles as $key => $value){
				$style =[
					'id'		=> $i++,
					'name' 		=> $key,
					'value'		=> $value,
					'user_id' 	=> session()->get( 'userData' )->id ,
				];
				// print_r($style);
				$m = $this->model->save( $style );
			}
			
			

			if ( $img->isVAlid() && ! $img->hasMoved()) {
				if (file_exists( ROOTPATH . 'public/images/logo.png' )) {
					
					unlink( ROOTPATH . 'public/images/logo.png' );
				}

	            $filepath = ROOTPATH . $img->store('../../public/images/', 'logo.png');
	       
	            $data = ['uploaded_flleinfo' => new File($filepath)];

	            $this->data[ 'pageTitle' ] = lang( 'PageTitle.setting' );
	            // $this->data[ 'styles' ] = $this->model->where( 'id' , 1 )->first();

				return $this->view( 'setting' ); 
        	}
        	else{
        		$this->data[ 'pageTitle' ] = lang( 'PageTitle.setting' );
        		// $this->data[ 'styles' ] = $this->model->where( 'id' , 1 )->first();
				return $this->view( 'setting' ); 
        	}
		}
	}