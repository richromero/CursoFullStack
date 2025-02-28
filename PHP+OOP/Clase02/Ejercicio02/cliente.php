<?php

//Defino variables privadas para la clase Cliente

Class Cliente{
  Private $nombre;
  Private $apellido;
  Private $documento;
  Private $nacimiento;
  Private $email;
  Private $pass;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($nombre,$apellido,$documento,$nacimiento,$email,$pass){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->documento = $documento;
    $this->nacimiento = $nacimiento;
    $this->email = $email;
    $this->pass = $pass;
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
  }
  public function getNacimiento(){
    return $this->nacimiento;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }

  }

  //////////  EJERCICIO 01  //////////

  class Persona extends Cliente
  {
    Private $nombre;
    Private $apellido;
    Private $documento;
    Private $nacimiento;

    public function __construct($nombre,$apellido,$documento,$nacimiento){
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->documento = $documento;
      $this->nacimiento = $nacimiento;
    }
    public function setNombre($nombre){
      $this->nombre = $nombre;
    }
    public function getNombre(){
      return $this->nombre;
    }
    public function setApellido($apellido){
      $this->apellido = $apellido;
    }
    public function getApellido(){
      return $this->apellido;
    }
    public function setDocumento($documento){
      $this->documento = $documento;
    }
    public function getDocumento(){
      return $this->documento;
    }
    public function setNacimiento($nacimiento){
      $this->nacimiento = $nacimiento;
    }
    public function getNacimiento(){
      return $this->nacimiento;
    }
  }

  class Pyme extends Cliente
  {
    function __construct(argument)
    {
      // code...
    }
  }

  class Multinacional extends Cliente
  {
    function __construct(argument)
    {
      // code...
    }
  }
