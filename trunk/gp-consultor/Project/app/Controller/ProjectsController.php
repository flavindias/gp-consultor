<?php
/*
 * Created on 08/01/2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class ProjectsController extends AppController{
 	public $helpers = array ('html','form');
 	public $name = 'Projects';
 	var $scaffold;
 	
 	
 	public function index(){
 		$this -> layout = 'IndexProjects';
 		$this -> set ('projects', $this-> Project->find('all'));
 	}
 	
 	public function add(){
 		$this->layout = 'base';
 		if($this->request->is('post')){
 			if($this->Project->saveAll($this->request->data)){
           		$this->redirect(array('action' => 'index'));
 			}
 		}
 		else{
 			$this-> set ('projects',$this->Project->find('all'));
 			$this-> set ('companies',$this->Project->Company->find('all'));
 		}
 	}
 	
 	public function GetCompanies(){
 		$this-> set ('companies',$this->Project->find('all'));
 	}
 	
 }
?>
