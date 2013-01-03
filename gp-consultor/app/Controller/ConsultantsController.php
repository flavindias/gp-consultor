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
   public function editar($id = NULL)
   {
   	$this->User->id = $id;
   	if(!$this->User->exists())
	{
      throw new NotFoundException("Usuário não encontrado!");
	}
	if($this->request->is('post') || $this->request->is('put'))
	{
      if($this->User->save($this->request->data))
      {
         $this->Session->setFlash('O usuário foi editado com sucesso!');
         $this->redirect(array('action' => 'index'));
      } else {
         $this->Session->setFlash('O usuário não foi editado. Tente novamente.');
      }
	}
   }
 	
 }
?>
