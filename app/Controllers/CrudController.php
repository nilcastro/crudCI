<?php namespace App\Controllers;

use App\Models\Crud_model;


class CrudController extends BaseController{

	public function index(){
		$task_model1 = new Crud_model();
		$taskArray = $task_model1->findAll();
		$data=[
			'task' => $taskArray
		];
		echo view('CrudView',$data);
	}


	public function create(){
		$task_model = new Crud_model();
		if ($this->request->getMethod() === 'post'){

			$task = [
				'tittle' => $this->request->getPost('tittle'),
				'description' => $this->request->getPost('description'),
				'creadted-at' => $this->request->getPost('creadted-at')
			];


			if($task_model->save($task)){
				return redirect()->to('http://localhost/cifw/public/')->with('message', 'Contacto registrado');

			}else{
				return redirect()->to('http://localhost/cifw/public/')->with('message', 'Contacto no registrado');

			}
		}
	}

	public function edit(int $id)
	{	
		$taskmodel = new Crud_model();
		$taskArray = $taskmodel->find($id);

		$data=[
			'id' => $taskArray['id'],
			'tittle' => $taskArray['tittle'],
			'description' => $taskArray['description'],
			'creadted-at' => $taskArray['creadted-at']
		];
		
		echo view('CrudEdit', $data);	
	}

	public function  editaction(){ 

		$taskmodel = new Crud_model();

		if ($this->request->getMethod() === 'post'){
			$id = $this->request->getPost('id');
			$task = [
				'id' => $this->request->getPost('id'),
				'tittle' => $this->request->getPost('tittle'),
				'description' => $this->request->getPost('description'),
				'creadted-at' => $this->request->getPost('creadted-at')
			];

			if($taskmodel->update($id, $task)){
				return redirect()->to('http://localhost/cifw/public/')->with('message', 'Contacto registrado');
			}else{
				return redirect()->to('http://localhost/cifw/public/')->with('message', 'Contacto registrado');
			}
		}
	}

	public function delete(int $id){

		$taskmodel = new Crud_model();
		if($taskmodel->delete($id)){
            return redirect()->to('http://localhost/cifw/public/')->with('message', 'Deleted success');

        }else{
            return redirect()->to('http://localhost/cifw/public/')->with('message', 'Deleted failed');
        }

	}
		
}	


	//--------------------------------------------------------------------


