<?php
/*
 * Created on 02/01/2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  
 // Abertura da classe
 class AddsController extends AppController{
 	
 	// Abertura da funcao
 	public function addConsultor() {
 		
 		//Verifica e pega os dados informados - Inicio do laco
	 	if ($this->request->is('post')){
	 		
	        //Salva as informacoes obtidas dos Dados Pessoais e Endereco - respectivamente
	        if (($this->Consultant->save($this->request->data)) and ($this->Address->save($this->request->data))){
	        		        
	            //Mensagem de validacao
	            $this->Session->setFlash('Cadastrado');
	            
	            //Para mudar a tela
	            $this->redirect(array('action' => 'index'));
	            	            
	        }else{
	        	
	            //Mosta mensagem em caso de erro
	            $this->Session->setFlash('Erro ao cadastrar');
	            
	        }//Fim do laco
	    }
	 }//Fechamento da funcao
 
 	
 }// Fechamento da Classe
  
?>
