<?php
class Ruta
{
	private $pdo;
    
    public $idruta;
    public $numero_ruta;
    public $nombre_bus;
    public $tarifa;
    public $idterminal;
    public $terminal_destino;

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



	public function ObtenerRuta($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM ruta WHERE idruta = ?");
			          

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

	

	public function ActualizarRuta($data)
	{
		try 
		{
			$sql = "UPDATE ruta SET 
						numero_ruta = ?, 
						nombre_bus  = ?,
                        tarifa  = ?,
                        idterminal = ?,
                        terminal_destino = ?
				    WHERE idruta = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                    $data->numero_ruta, 
                    $data->nombre_bus,
                    $data->tarifa,  
                    $data->idterminal, 
                    $data->terminal_destino, 
                    $data->idruta
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

	public function RegistrarRuta($data)
	{
		try 
		{
		$sql = "INSERT INTO ruta (numero_ruta, nombre_bus, tarifa, idterminal, terminal_destino) 
		        VALUES (?, ?, ?, ?, ? )";

		$this->pdo->prepare($sql)
		     ->execute(
				array(                
                    $data->numero_ruta, 
                    $data->nombre_bus,
                    $data->tarifa,  
                    $data->idterminal, 
                    $data->terminal_destino
                   
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