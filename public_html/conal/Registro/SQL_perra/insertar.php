<?php
header("Content-Type: text/html;charset=utf-8");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class insertar 
{
    public $correo;
    public $pass;
    public $imgroute;
    public $idTipo;
    public $idUsuario;
    public $nombre;
    public $apellidos;
    public $genero;    
    public $ronda;
    public $telefono;
    public $idLC;
    public $idUniversidad;
    public $semestre;
    public $carrera;
    public $entro_aiesec;
    public $area;
    public $currentrole;
    public $nickname;
    public $vegetariano;
    public $restricciones;
    public $ContactoEmergencia;
    public $conferencia;
    public $uno;
    public $dos;
    public $tres;
    public $cuatro;
    public $cinco;
    
    public function insert()
    {
        $model = new Conexion();
        $conexion = $model->conectar();
        $sql = "INSERT INTO usuario (
                correo, Pass, imgroute, idTipo
                )";
        $sql .=" VALUES (:correo,:pass,:imgroute,:idTipo)";
        $consulta = $conexion ->prepare($sql);
        $consulta->bindParam(':correo', $this->correo);
        $consulta->bindParam(':pass',  $this->pass);
        $consulta->bindParam(':imgroute',  $this->imgroute);
        $consulta->bindParam(':idTipo',  $this->idTipo);
        if (!$consulta)
        {
            $this->mensaje = "Se generó el error: ".$conexion->errorInfo();
        }
        else
        {
            $consulta->execute();
            $this->mensaje = "Datos insertados";
        }
    }
    public function info_usr()
    {
        $model = new Conexion();
        $conexion = $model->conectar();
        $sql = "INSERT INTO inf_us (
                idUsuario, nombre, apellidos, genero, ronda, telefono, idLC, idUniversidad, semestre, carrera, entro_aiesec, area, currentrole, nickname, vegetariano, restricciones, ContactoEmergencia
                )";
        $sql .=" VALUES (:idUsuario,:nombre,:apellidos,:genero,:ronda,:telefono,:idLC,:idUniversidad,:semestre,:carrera,:entro_aiesec,:area,:currentrole,:nickname,:vegetariano,:restricciones,:ContactoEmergencia)";
        $consulta = $conexion ->prepare($sql);
        $consulta->bindParam(':idUsuario', $this->idUsuario);
        $consulta->bindParam(':nombre',  $this->nombre);
        $consulta->bindParam(':apellidos',  $this->apellidos);
        $consulta->bindParam(':genero',  $this->genero);
        $consulta->bindParam(':ronda',  $this->ronda);
        $consulta->bindParam(':telefono',  $this->telefono);
        $consulta->bindParam(':idLC',  $this->idLC);
        $consulta->bindParam(':idUniversidad',  $this->idUniversidad);
        $consulta->bindParam(':semestre',  $this->semestre);
        $consulta->bindParam(':carrera',  $this->carrera);
        $consulta->bindParam(':entro_aiesec',  $this->entro_aiesec);
        $consulta->bindParam(':area',  $this->area);
        $consulta->bindParam(':currentrole',  $this->currentrole);
        $consulta->bindParam(':nickname',  $this->nickname);
        $consulta->bindParam(':vegetariano',  $this->vegetariano);
        $consulta->bindParam(':restricciones',  $this->restricciones);
        $consulta->bindParam(':ContactoEmergencia',  $this->ContactoEmergencia);
        if (!$consulta)
        {
            $this->mensaje = "Se generó el error: ".$conexion->errorInfo();
        }
        else
        {
            $consulta->execute();
            $this->mensaje = "Datos insertados";
        }
    }
    public function asistidas()
    {
        $model = new Conexion();
        $conexion = $model->conectar();
        $sql = "INSERT INTO c_a (
                idUsuario, nombre
                )";
        $sql .=" VALUES (:idUsuario,:nombre)";
        $consulta = $conexion ->prepare($sql);
        $consulta->bindParam(':idUsuario', $this->idUsuario);
        $consulta->bindParam(':nombre',  $this->conferencia);
        if (!$consulta)
        {
            $this->mensaje = "Se generó el error: ".$conexion->errorInfo();
        }
        else
        {
            $consulta->execute();
            $this->mensaje = "Datos insertados";
        }
    }
    public function preguntas()
    {
        $model = new Conexion();
        $conexion = $model->conectar();
        $sql = "INSERT INTO preguntas (idUsuario,uno,dos,tres,cuatro,cinco)";
        $sql .="VALUES (:idUsuario,:uno,:dos,:tres,:cuatro,:cinco)";
        $consulta = $conexion -> prepare($sql);
        $consulta -> bindParam('idUsuario', $this-> idUsuario);
        $consulta -> bindParam('uno', $this-> uno);
        $consulta -> bindParam('dos', $this-> dos);
        $consulta -> bindParam('tres', $this-> tres);
        $consulta -> bindParam('cuatro', $this-> cuatro);
        $consulta -> bindParam('cinco', $this-> cinco);
        if (!$consulta)
        {
            $this->mensaje = "Se generó el error: ".$conexion->errorInfo();
        }
        else
        {
            $consulta->execute();
            $this->mensaje = "Datos insertados";
        }
    }
}
