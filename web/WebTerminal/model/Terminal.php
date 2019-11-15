<?php
class Terminal
{
	private $pdo;
    
    public $idterminal;
    public $nombre_terminal;
    

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


	public function EliminarTerminal($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM terminal WHERE idterminal = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ObtenerTerminal($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM terminal WHERE idterminal = ?");
			          

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
	

	public function ActualizarTerminal($data)
	{
		try 
		{
			$sql = "UPDATE terminal SET 
						nombre_terminal = ?
					
				    WHERE idterminal = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre_terminal,
                        $data->idterminal
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

	public function ListarTerminall()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT idterminal, nombre_terminal FROM terminal");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ListarTerminal()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT * FROM terminal");
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
	public function RegistrarTerminal($data)
	{
		try 
		{
		$sql = "INSERT INTO terminal (nombre_terminal) 
		        VALUES (?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(                
                    $data->nombre_terminal
                  
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