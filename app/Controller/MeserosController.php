<?php 
/**
* 
*/
class MeserosController extends AppController
{
	
	public $helpers = array('Html','Form','Time');

	public $components = array('Session','RequestHandler');

	public function index()
	{
		$this->set('meseros', $this->Mesero->find('all'));
	}

	public function detalle($id = null)
	{
		if(!$id)
		{
			throw new NotFoundExceptionException("Datos Invalidados");
			
		}

		$mesero = $this->Mesero->findById($id);

		if(!$mesero)
		{
			throw new NotFoundExceptionException("El Mesero no Existe");
		}

		$this->set('mesero', $mesero);
	}

	public function nuevo()
	{
		if($this->request->is('post'))
		{
			$this->Mesero->create();

			if($this->Mesero->save($this->request->data))
			{
				$this->Session->setFlash('El meser@ se ha creado', $element = 'default', $params = array('class'=>'success'));
				return $this->redirect(array('action'=>'index'));
			}else{

				$this->Session->setFlash('El meser@ no puede ser creado');
			}
		}
	}

	public function editar($id = null)
	{
		if(!$id)
		{
			throw new NotFoundExceptionException("Datos Invalidados");
		}

		$mesero = $this->Mesero->findById($id);

		if(!$mesero)
		{
			throw new NotFoundExceptionException("El Mesero no Existe");
		}

		if($this->request->is('post'))
		{
			$this->Mesero->id = $id;

			if($this->Mesero->save($this->request->data))
			{
				$this->Session->setFlash('El meser@ se ha editado', $element = 'default', $params = array('class'=>'success'));
				return $this->redirect(array('action'=>'index'));
			}else{

				$this->Session->setFlash('No se pudo editar el Mesero');
			}
		}

		if(!$this->request->data)
		{
			$this->request->data = $mesero;
		}
	}

	public function elimiar($id = null)
	{
		if($this->request->is('get'))
		{
			throw new MethodNotAllowedException("Error Processing Request");
			
		}

		if($this->Mesero->detele($id))
		{
			$this->Session->setFlash('El meser@ se ha Eliminado', $element = 'default', $params = array('class'=>'success'));
			return $this->redirect(array('action'=>'index'));
		}else{

			$this->Session->setFlash('El meser@ no se puede Eliminar');
		}
	}
}
 ?>