<?php
class Ruta
{
	private $pdo;
    
    public $idruta;
    public $numero_ruta;
    public $nombre_bus;
    public $tarifa;
    public $idterminal;
  

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::Conectar();     
		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}



	public function ObtenerButaca($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM butaca WHERE idbutaca = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}
	public function Eliminarempleados($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM empleados WHERE idempleado = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function CambiarEstadobutaca($nuevo_estado, $id)
	{
		try 
		{
			$sql = "UPDATE butaca SET 
						estado      = ?
				    WHERE idbutaca  = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $nuevo_estado,
                        $id
					)
				);
		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}

	public function ActualizarButaca($data)
	{
		try 
		{
			$sql = "UPDATE butaca SET 
						nombre = ?, 
						idsala  = ?
				    WHERE idbutaca = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->idsala,
                        $data->idbutaca
					)
				);
		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}

	public function RegistrarButaca($data)
	{
		try 
		{
		$sql = "INSERT INTO butaca (nombre, idsala) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(                
                    $data->nombre, 
                    $data->idsala
                )
			);
		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}

}