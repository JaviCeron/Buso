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

	public function ListarHorario()
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