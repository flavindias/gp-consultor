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
      if($this->request->is('post'))
      {
         if($this->Consultant->saveAll($this->request->data))
         {
            $this->Session->setFlash('O usu�rio foi adicionado com sucesso!');
            $this->redirect(array('action' => 'index'));
         } }
   }
   public function edit($id = NULL)
<<<<<<< .mine   
   public function edit($id = NULL)
=======   public function edit($id = NULL)
>>>>>>> .theirs   {
   	$this->Consultant->id = $id;
   	if(!$this->Consultant->exists())
	{
      throw new NotFoundException("Usu�rio n�o encontrado!");
	}
	if($this->request->is('post') || $this->request->is('put'))
	{
      if($this->User->save($this->request->data))
      {
         $this->Session->setFlash('O usu�rio foi editado com sucesso!');
         $this->redirect(array('action' => 'index'));
      } else {
         $this->Session->setFlash('O usu�rio n�o foi editado. Tente novamente.');
      }
	}
   }
 	
 }
?>
