<?php


class CompaniesController extends AppController {
	
	public $uses = 'Company';
	public $name = 'Companies';
	
	public function index(){
		$this -> layout = 'IndexCompanies';
		$this->set('companies', $this->Company->find('all', array('conditions'=> array('Company.removed !=' => 1))));		
	}
	
	public function add(){
		
		$this -> layout = 'base';

		if($this->request->is('post')){
			if($this->Company->saveAll($this->request->data)){
				$this->Session->setFlash('Empresa cadastrada com sucesso!');
				$this->redirect(array('action' => 'index'));
				 
			}
		}
		else{			
			$this->Session->setFlash('A empresa n�o foi cadastrada. Tente novamente!');			
		}
		
	}
	public function edit($id = NULL){

		$this->layout = 'base';

		$this->Company->id = $id;

		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$comp = $this->Company->findById($id);

		if (!$comp) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is('get')) {
			$this->request->data = $this->Company->read();
			}
			else {
				$this->Company->id = $id;

		if ($this->Company->saveAll($this->request->data)) {

			$this->Session->setFlash('Empresa atualizada!');
			$this->redirect(array('action' => 'index'));
			}
		}
	}

	
	
	public function delete($id = NULL){
		
		$this->Company->id = $id;
		#$this->layout = 'DeleteCompany';
		
		
		$this->Company->saveField('removed',1);
		
		$this->Session->setFlash('Empresa removida com sucesso!');
		
		$this->redirect('/Companies');
		
	}
	

	public function view($id){

		$this->Company->id = $id;
		$this->layout = 'base';
		
	    if ($this->request->is('get')) {
	        $this->set('company', $this->Company->read());
	    }
	}

}


?>
