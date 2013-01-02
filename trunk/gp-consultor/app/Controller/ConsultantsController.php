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
 		$this -> layout = 'listagem';
 		$this -> set ('consultants', $this-> Consultant->find('all'));
 	}
 	
 	public function add()
   {
      if($this->request->is('post'))
      {
         if($this->Consultant->saveAll($this->request->data))
         {
            $this->Session->setFlash('O usuário foi adicionado com sucesso!');
            $this->redirect(array('action' => 'index'));
         } }
   }
 	
 }
?>
