<?php
    class Producto
    {
        
            #atributos 
        private  $Nombre;
        private $Ingredientes;
        private  $Descripcion;
        private   $Valor;

        public function __construct($Nombre,$Ingredientes,$Descripcion,$Valor)
        {
         $this->Nombre=$Nombre;
         $this->Ingredientes=$Ingredientes;
         $this->Descripcion=$Descripcion;
         $this->Valor=$Valor;
        }
    
        public function getNombre(){
            return $this->Nombre;
        }
        public function setNombre($Nombre){
            $this->Nombre=$Nombre;
        }

        public function getIngredientes(){
            return $this->Ingredientes;
        }
        public function setIngredientes($Ingredientes){
            $this->Ingredientes=$Ingredientes;
        }

        public function getDescripcion(){
            return $this->Descripcion;
        }
        public function setDescripcion($Descripcion){
            $this->Descripcion=$Descripcion;
        }
        public function getValor(){
            return $this->Valor;
        }
        public function setValor($Valor){
            $this->Valor=$Valor;
        }
            #metodos 
        public function crearProducto(){}
        public function actualizarProducto(){}
        public function EliminarProducto(){}
        public function leerProducto(){}


    }



?>