<?php
header("Content-Type: text/html;charset=utf-8");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class comprobar 
{
    public $correo;
    
    public function revisar()
    {
        $model = new Conexion();
        $conexion = $model->conectar();
        $sql = "SELECT * FROM usuario";
        $sql .=" WHERE correo=:correo";
        $consulta = $conexion ->prepare($sql);
        $consulta->bindParam(':correo', $this->correo);
        $consulta->execute();
        $total= $consulta -> rowCount();
        $this->mensaje = $total;
    }
    public function consulta()
    {
        $model = new Conexion();
        $conexion = $model->conectar();
        $sql = "SELECT * FROM usuario";
        $sql .=" WHERE correo=:correo";
        $consulta = $conexion ->prepare($sql);
        $consulta->bindParam(':correo', $this->correo);
        $consulta->execute();
        while($filas = $consulta ->fetch())
        {
            $this->rows[] = $filas;
        }
    }
    public function lc()
    {
        $model = new Conexion();
        $conexion = $model->conectar();
        $sql = "SELECT * FROM lc";
        $consulta = $conexion ->prepare($sql);
        $consulta->execute();
        while($filas = $consulta ->fetch())
        {
            $this->rows[] = $filas;
        }
    }
}
