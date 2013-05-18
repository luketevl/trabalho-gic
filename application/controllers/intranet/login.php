<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	
	function index(){
		if($this->login_permission->is_logado()){
			redirect('index.php/intranet/principal');
		}else{
			$this->lang->load('posts');
			$dados = array('tp_fb_login'		=> $this->lang->line('tp_fb_login'));
			$this->load->view('intranet/login',$dados);
		}
	}
	
	/*			FACEBOOK
	 */
	public function facebook(){
		if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['code'])){
		 
		  // Informe o seu App ID abaixo
		  $appId = FB_APP_ID;
		 
		  // Digite o App Secret do seu aplicativo abaixo:
		  $appSecret = FB_APP_SECRET;
		 
		  // Url informada no campo "Site URL"
		  $redirectUri = urlencode(FB_SITELOGIN);
		 
		  // Obtém o código da query string
		  $code = $_GET['code'];
		 
		  // Monta a url para obter o token de acesso e assim obter os dados do usuário
		  $token_url = "https://graph.facebook.com/oauth/access_token?"
		  . "client_id=" . $appId . "&redirect_uri=" . $redirectUri
		  . "&client_secret=" . $appSecret . "&code=" . $code;
		 
		  //pega os dados
		  $response = @file_get_contents($token_url);
		  if($response){
		    $params = null;
		    parse_str($response, $params);
		    if(isset($params['access_token']) && $params['access_token']){
		      $graph_url = "https://graph.facebook.com/me?access_token="
		      . $params['access_token'];
		      $user = json_decode(file_get_contents($graph_url));
		 
		    // nesse IF verificamos se veio os dados corretamente
		      if(isset($user->email) && $user->email){
		 
		    /*
		    *Apartir daqui, você já tem acesso aos dados usuario, podendo armazená-los
		    *em sessão, cookie ou já pode inserir em seu banco de dados para efetuar
		    *autenticação.
		    *No meu caso, solicitei todos os dados abaixo e guardei em sessões.
		    */
		 
		        $dados['email_usu'] = $user->email;
		        $dados['nome_usu'] = $user->name;
		        $dados['dp_nascimento'] = $user->birthday;
		        $dados['localizacao'] = $user->location->name;
		        $dados['uid_facebook'] = $user->id;
		        $dados['user_facebook'] = $user->username;
		        $dados['link_facebook'] = $user->link;
		        $this->logar($dados);
		      }
		//       echo "<pre>";
		//       print_r($user);
		//       echo "</pre>";
		      
		      
		    }else{
		      echo "Erro de conexão com Facebook";
			  redirect('intranet/login');
		      exit(0);
		    }
		 
		  }else{
		    echo "Erro de conexão com Facebook";
		    redirect('index.php/intranet/login');
		    exit(0);
		  }
		}else if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['error'])){
		    redirect('index.php/intranet/login');
		  echo 'Permissão não concedida';
		}
			}
	
	/*			FACEBOOK
	*/

	
	
	public function cadastrar(){
		$u = new Usuarios();
	
		
		$dados = array( 'nome_usu'			=> $this->input->post('nome') , 
						'email_usu'			=> $this->input->post('email'), 
						'pass_usu'			=> $this->input->post('senha'),
						'dt_nascimento'		=> $this->input->post('dp_nascimento'),
						'dt_criacao'		=> unix_to_human(time(), TRUE, 'us'), // U.S. time with seconds,
						'avatar_usu'		=> $this->input->post('img_avatar'),
						'id_perf'			=> $this->input->post('id_perf')
					  );
		
		if($this->exist_user($dados['email_usu'])){
			echo "Existe";			
		}
		else{
				$u->inserir($dados);
				$u = $u->get_last_id();
				$dados['id_usu'] = $u->id_usu;
				$this->logar($dados);
		}
	}
	
	public function entrar(){
		$u = new Usuarios();
		$dados = array( 'email_usu'	=> $this->input->post('email'),
						'pass_usu'	=> $this->input->post('senha'),
		);
		$aux = $this->verifica_dados_usuario($dados);
		if(!$aux){
			echo 'Nao cadastrado';
		}
		else{
			$this->logar($aux);
		}
	}
	
	public function deslogar(){
		$this->session->sess_destroy();
		redirect('index.php/intranet/login');
	}
	
	
	public function logar($result){
			$this->session->set_userdata($result);
			redirect('index.php/intranet/principal');
	}
	
	public function verifica_dados_usuario($dados){
		$u = new Usuarios();
		$u = $u->verifica_usuario($dados['email_usu'],$dados['pass_usu']);
		$result = $this->dados_usuario($u);
		if(empty($result)){
			return false;
		}
		else{
			return $result;
		}
	}
	
	public function dados_usuario($u){
		$result = array();
		foreach($u as $key=>$val){
			$result['id_usu']			= $u->id_usu;
			$result['nome_usu']			= $u->nome_usu;
			$result['email_usu']		= $u->email_usu;
			$result['dt_criacao']		= $u->dt_criacao;
			$result['dt_nascimento']	= $u->dt_nascimento;
			$result['avatar_usu']		= $u->avatar_usu;
			$result['id_perf']			= $u->id_perf;
		}
		return $result;
	}
	private function exist_user($email){
		$u = new Usuarios();
		$u = $u->get_by_email($email);
		$aux = $this->dados_usuario($u);
		if(empty($aux)){
			return false;
		}
		return true;
	}
}
