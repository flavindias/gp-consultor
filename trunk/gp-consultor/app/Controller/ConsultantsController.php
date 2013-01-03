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
 	
 	public function add()
   {
   	  $this -> layout = 'AddConsultant';
      if($this->request->is('post'))
      {
         if($this->Consultant->saveAll($this->request->data))
         {
            $this->Session->setFlash('O usuário foi adicionado.');
            $this->redirect(array('action' => 'index'));
         } }
   }
   public function edit($id = NULL)
   {
		 $this->Consultant->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Consultant->read();
		} else {
			if ($this->Consultant->save($this->request->data)) {
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
 	
 }
?>
