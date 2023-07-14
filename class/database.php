<?php 
    class database
    {
        private $PDOLocal;
        private $user = "fernando";
        private $password = "1234";
        private $server = "mysql:host=localhost:3309;dbname=sweet_beauty";
        function conectarDB()
        {
            try
            {
                $this->PDOLocal = new PDO($this->server, $this->user, $this->password);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }

        function desconectarDB()
        {
            try
            {
                $this->PDOLocal = null;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }

        function seleccionar($consulta)
        {
            try
            {
                $resultado = $this->PDOLocal->query($consulta);
                $fila = $resultado->fetchAll(PDO::FETCH_OBJ);
                return $fila;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }

        function ejecuta($cadena)
    {
        try
        {
            $this->PDOLocal->query($cadena);
        }catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    function verifica($usuario, $contra)
    {
        try
        {

            $pase = false;
            $query = "SELECT * FROM usuarios WHERE nombre_usuario='$usuario';";
            $consulta = $this->PDOLocal->query($query);

            while($renglon = $consulta->fetch(PDO::FETCH_ASSOC))
            {
                if(password_verify($contra, $renglon['contraseña_usuario']))
                {
                    $pase = true;
                }
            }

            if($pase)
            {
                session_start();
                $_SESSION["usuario"] = $usuario;
                echo "<div class='alert alert-succes'>";
                echo "<h2 align='center'> Bienvenido ".$_SESSION["usuario"]."</h2>";
                echo "</div>";
                header("refresh:2, /INTEGRADORA/views/home.php");
            }else
            {
                echo "<div class='alert alert-danger'>";
                echo "<h2 aling='center'>Usuario o Password incorrectos</h2>";
                echo "</div>";
                header("refresh:2, /INTEGRADORA/views/login.php");
            }

        }catch(PDOException $e)
        {
            echo $e->getMessage();
        }
       
    }
    
    function CerrarSesion()
    {
        
            session_start();
            session_destroy();
            header("Location: ../views/home.php");

       
    }

    }
?>