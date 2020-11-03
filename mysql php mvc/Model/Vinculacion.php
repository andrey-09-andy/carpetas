<?php
class Vinculacion
{
	private $pdo;
    
    public $vinc_id;
	public $nombre;
	
    
    

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

	public function ListarV()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM vinculacion");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function getting($vinc_id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM vinculacion WHERE vinc_id = ?");
			          

			$stm->execute(array($vinc_id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($vinc_id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM vinculacion WHERE vinc_id = ?");			          

			$stm->execute(array($vinc_id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE vinculacion SET 
						vinc_id=?,
						nombre   = ?
				    WHERE vinc_id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->vinc_id,
                        $data->nombre
                        
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
		$sql = "INSERT INTO `vinculacion` (vinc_id,nombre) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                        $data->vinc_id, 
                        $data->nombre,
                                            
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}
?>
