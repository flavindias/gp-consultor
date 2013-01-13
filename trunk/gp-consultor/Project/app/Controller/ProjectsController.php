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
		$this->set('title_for_layout', 'Projetos');
 		$this -> layout = 'index';
 		$this -> set ('projects', $this-> Project->find('all', array('conditions'=> array('Project.removed !=' => 1))));
 	}
 	
 	public function add(){
 		$this->layout = 'base';
 		if($this->request->is('post')){
 			if($this->Project->saveAll($this->request->data)){
           		$this->redirect(array('action' => 'index'));
 			}
 		}
 		else{
 				$this-> set ('companies',$this->Project->Company->find('all', array('conditions'=> array('Company.removed !=' => 1))));
 				$this-> set ('projects',$this->Project->find('all'), array('conditions'=> array('Project.removed !=' => 1)));
 		}
 	}
	
	public function edit($id = NULL){
		$this->layout = 'base';
		$this->Project->id = $id;
		if (!$id) {
        	throw new NotFoundException(__('Invalid post'));
	    }
	
	    $consult = $this->Project->findById($id);
	    if (!$consult) {
	        throw new NotFoundException(__('Invalid post'));
	    }
		if ($this->request->is('get')) {
			$this->request->data = $this->Project->read();
			$this-> set ('projects',$this->Project->find('all', array('conditions'=> array('Project.removed !=' => 1, 'Project.id !=' => $id))));
			$this-> set ('companies',$this->Project->Company->find('all', array('conditions'=> array('Company.removed !=' => 1))));
		}
		else{
			$this->Project->id = $id;
			if ($this->Project->saveAll($this->request->data)) {
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	public function delete($id = NULL){
		$this->Project->id = $id;
		if($this->Project->saveField("removed", "true")){
			$this->Session->setFlash('O consultor foi deletado.');
			$this->redirect(array('action' => 'index'));
		}
	}
 	
 	
 	public function view($id = null){
		$this -> layout = 'base';
 		if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

 		$Projects =  $this->Project->findById($id);
 		
 		if (!$Projects) {
            throw new NotFoundException(__('Invalid post'));
        }
        
        $nameCompany = $this->GetNameCompany($Projects['Project']['company_id']);
        $this -> set('nameCompany', $nameCompany);
        $this ->set('project',$Projects);
 	}
 	
 	private function GetNameCompany($id){
 		$name = $this->Project->Company->findById($id);
 		return $name['Company']['name'];
 		
 	}
 }
?>
