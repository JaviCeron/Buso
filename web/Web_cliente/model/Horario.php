<?php
class Horario
{
	private $pdo;
    
    public $idhorario;
    public $hora_salida;  
    public $hora_meta;
    public $idruta;
   
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
	public function ListarHorario($idruta)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT h.idhorario as idhorario, h.hora_salida as hora_salida, h.hora_meta as hora_meta, s.numero_ruta as numero_ruta FROM horario as h INNER JOIN ruta AS s ON h.idruta = s.idruta WHERE h.idruta = ?");
			          
			$stm->execute(array($idruta));
			return $stm->fetchAll(PDO::FETCH_OBJ);
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

	public function ListarDetalle($idhorario)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT h.idruta as idruta, s.hora_salida as hora_salida, s.hora_meta as hora_meta, h.numero_ruta as numero_ruta, h.nombre_bus as nombre_bus, h.tarifa as tarifa, h.terminal_destino as terminal_destino FROM ruta as h INNER JOIN horario AS s ON h.idhorario = s.idhorario WHERE h.idhorario = ?");
			          
			$stm->execute(array($idhorario));
			return $stm->fetchAll(PDO::FETCH_OBJ);
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

	public function ListarHorarioo()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT h.idhorario as idhorario, h.hora_salida as hora_salida, h.hora_meta as hora_meta, s.numero_ruta as numero_ruta FROM horario as h INNER JOIN ruta AS s ON h.idruta = s.idruta  ORDER BY hora_salida asc");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
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


	public function EliminarHorario($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM horario WHERE idhorario = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function ObtenerHorario($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM horario WHERE idhorario = ?");
			          

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


	public function ActualizarHorario($data)
	{
		try 
		{
			$sql = "UPDATE horario SET 
						hora_salida = ?, 
						hora_meta  = ?,
                        idruta     = ?
				    WHERE idhorario   = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->hora_salida, 
                        $data->hora_meta,
						$data->idruta,
                        $data->idhorario
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

	public function RegistrarHorario($data)
	{
		try 
		{
		$sql = "INSERT INTO horario (hora_salida, hora_meta, idruta) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->hora_salida, 
					$data->hora_meta,
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

}