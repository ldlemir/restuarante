<?php 
/**
* 
*/
class MesasController extends AppController
{
	
	public function index()
	{
		$this->set('mesas', $this->Mesa->find('all'));
	}

	public function editar($id = null)
	{
		if(!$id)
		{
			throw new NotFoundException("Datos invalidos");
			
		}

		$mesa = $this->Mesa->findById($id);

		if(!$mesa)
		{
			throw new NotFoundException("La mesa no existe");
		}

		if($this->request->is('post'))
		{
			$this->Mesa->id = $id;

			if($this->Mesa->save($this->request->data))
			{
				$this->Session->setFlash('La mesa se ha editado', $element = 'default', $params = array('class'=>'success'));
				return $this->redirect(array('action'=>'index'));
			}else{

				$this->Session->setFlash('La mesa no puede ser edita');
			}
		}

		if(!$this->request->data)
		{
			$this->request->data = $mesa;

		}

		$mesas = $this->Mesa->Mesero->find('list', array('fields'=>array('id','nombre_com')));
		$this->set('meseros', $mesas);
	}

	public function eliminar($id = null)
	{
		if($this->request->is('get'))
		{
			throw new MethodNotAllowedException("Error Processing Request");
			
		}

		if($this->Mesa->delete($id))
		{
			$this->Session->setFlash('La mesa se ha eliminado ', $element = 'default', $params = array('class'=>'success'));
			return $this->redirect(array('action'=>'index'));
		}else{
			$this->Session->setFlash('La Mesa no se puede eliminar');
		}
	}

	public function nueva()
	{
		if($this->request->is('post'))
		{
			$this->Mesa->create();

			if($this->Mesa->save($this->request->data))
			{
				$this->Session->setFlash('La mesa se ha creado');
				return $this->redirect(array('action'=>'index'));
			}else{

				$this->Session->setFlash('La mesa no se pudo crear');
			}
		}

		$mesas = $this->Mesa->Mesero->find('list', array('fields'=>array('id','nombre_com')));
		$this->set('meseros', $mesas);

	}
}
 ?>