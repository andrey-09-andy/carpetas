<?php
class Docente
{
	private $pdo;
    
    public $doc_id;
	public $nombre;
	public $apellido;
    public $fecha;
	public $salario;
	public $vinc_id;
    
    

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
//vinculacion


//
	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM docente");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function getting($doc_id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM docente WHERE doc_id = ?");
			          

			$stm->execute(array($doc_id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($doc_id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM docente WHERE doc_id = ?");			          

			$stm->execute(array($doc_id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE docente SET 
						 
						nombre   = ?,
                        apellido = ?,
						fecha    = ?, 
						salario  = ?,
						vinc_id  =?
				    WHERE doc_id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        //$data->doc_id, 
                        $data->nombre,
                        $data->apellido,
                        $data->fecha,
						$data->salario,
						$data->vinc_id,
                        $data->doc_id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `docente` (doc_id,nombre,apellido,fecha,salario,vinc_id) 
		        VALUES (?, ?, ?, ?, ?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                        $data->doc_id, 
                        $data->nombre,
                        $data->apellido,
                        $data->fecha,
						$data->salario,
						$data->vinc_id,                    
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}
?>
