<?php
class Usuario
{
	private $pdo;
    
    public $idusuario;
    public $nombre;
    public $apellido;
    public $email;
    public $clave;
   
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

	public function Entrar($email, $clave)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE email = ? AND clave = MD5(?) ");
			          

			$stm->execute(array($email, $clave));
			
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

	public function ListarUsuario()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT* FROM usuario");
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
    public function EliminarUsuario($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM usuario WHERE idusuario = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	

	public function ObtenerUsuario($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE idusuario = ?");
			          

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
	

	

	public function ActualizarUsuario($data)
	{
		try 
		{
			$sql = "UPDATE usuario SET 
						nombre            = ?, 
						apellido          = ?,
                        email             = ?
				    WHERE idusuario = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->apellido,
                        $data->email,
                        $data->idusuario
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

	public function RegistrarUsuario($data)
	{
		try 
		{
		$sql = "INSERT INTO usuario (nombre, apellido, email, clave) 
		        VALUES (?, ?, ?, MD5(?))";

		$this->pdo->prepare($sql)
		     ->execute(
				array(                
                    $data->nombre, 
                    $data->apellido,
                    $data->email,
                    $data->clave
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

    public function ActualizarClave($data)
	{
		try 
		{
			$sql = "UPDATE usuario SET  
						clave 	    = MD5(?)
				    WHERE idusuario = ?";

			$resultado = $this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->clave,
                        $data->idusuario
					)
				);

			return $resultado;
			
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}