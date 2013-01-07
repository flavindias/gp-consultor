<?php
/*
 * Created on 24/12/2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class ConsultantsController extends AppController {
 	public $helpers = array ('html','form');
 	public $name = 'Consultants';
 	var $scaffold;
 	
 	
 	
 	public function index(){
 		$this -> layout = 'viewConsultant';
 		$this -> set ('consultants', $this-> Consultant->find('all'));
 	}
 	
 	public function view($id = null){
 		 if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
 		$this -> layout = 'base';
 		$consultant =  $this->Consultant->findById($id);
 		 if (!$consultant) {
            throw new NotFoundException(__('Invalid post'));
        }
        
        $this ->set('consultant',$consultant);
 	}
 	
 	public function add()
   {
   	 $this -> layout = 'base';
      if($this->request->is('post'))
      {
      	
      	//$this->Consultant->cpf = $this->LimparMask($this->Consultant->cpf); 
      	
      	
         if($this->Consultant->saveAll($this->request->data))
         {
            $this->Session->setFlash('O usuário foi adicionado.');
           $this->redirect(array('action' => 'index'));
         } }
   }
   public function edit($id = NULL)
   {
		$this->layout = 'base';
		$this->Consultant->id = $id;
		if (!$id) {
        	throw new NotFoundException(__('Invalid post'));
	    }
	
	    $consult = $this->Consultant->findById($id);
	    if (!$consult) {
	        throw new NotFoundException(__('Invalid post'));
	    }
		if ($this->request->is('get')) {
			$this->request->data = $this->Consultant->read();
		} 
		else {
			$this->Consultant->id = $id;
			if ($this->Consultant->saveAll($this->request->data)) {
				
				$this->Session->setFlash('Consultor foi editado.');
				$this->redirect(array('action' => 'index'));
			}
		}
   }
   public function delete($id = NULL)
   {
		$this->Consultant->id = $id;
		if($this->Consultant->saveField("removed", "true")){
			$this->Session->setFlash('Consultor foi deletado.');
			$this->redirect(array('action' => 'index'));
		}
   }
   //função para eliminar caracteres das mascaras
   public function LimparMask($valor){
   		//$mask = array(",", ".","-","(",")");
   		$mask = '.';
        $result = str_replace($mask, "", $valor);
        return $result;
   }
   
   public function ajaxMsg($obj=null){
   		$this->layout='ajax';   
   		$obj ="#000000";		   		
   		if(strlen($obj) == 2 ) {
   			if($this->Consultant->findByAcronym($obj)){
   			$this->set('mensagem', 'Abreviação já cadastrada.');}
   			else{
   			$this->set('mensagem','');
   		}
   		}
   		else if(strlen($obj) == 7){
   			if ($this->Consultant->findByAcronym_color($obj))
   			{
   			$this->set('mensagem', 'Cor já cadastrada');
   			}
   			else{
   			$this->set('mensagem',$obj);
   			}
   		}
   		else if(strlen($obj) == 14){
   			if($this->Consultant->findByCpf($obj)){
   			$this->set('mensagem', 'CPF já cadastrado!');}
   			else{
   			$this->set('mensagem','');
   		}
   		}	
   		else{
   			$this->set('mensagem','no');
   		}
   }
 	
 }
?>
