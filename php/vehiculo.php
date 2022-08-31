<?php

    if(isset($_POST['btnSubmit'])){

        class Vehiculo
    {
        
        /**
         * Atributos de clase
         */
        public $marca;
        public $anoMatriculacion;
        public $potencia;
        public $numPuertas;

        /**
         * Constructor de clase
         */
        function __construct(string $marca, int $anoMatriculacion, int $potencia, string $numPuertas)
        {
            $this->marca = $marca;
            $this->anoMatriculacion = $anoMatriculacion;
            $this->potencia = $potencia;
            $this->numPuertas = $numPuertas;
        }

        /**
         * Getters y Setters
         */
         function getMarca(){
            return $this->marca;
         }
         function getAnoMatriculacion(){
            return $this->anoMatriculacion;
         }
         function getPotencia(){
            return $this->potencia;
         }
         function getNumPuertas(){
            return $this->numPuertas;
         }
         function setMarca(string $marca){
            $this->marca = $marca;
         }
         function setAnoMatriculacion(int $anoMatriculacion){
            $this->anoMatriculacion = $anoMatriculacion;
         }
         function setPotencia(int $potencia){
            $this->potencia = $potencia;
         }
         function setNumPuertas(string $numPuertas){
            $this->numPuertas = $numPuertas;
         }

         /**
          * Función __toString
          */
          function __toString()
          {
            return "Marca: $this->marca <br>
                    Año Matriculación: $this->anoMatriculacion <br>
                    Potencia: $this->potencia CV<br>
                    Número de puertas: $this->numPuertas";
          }
    }

    /**
     * Se crea una instancia de la clase Vehículo.
     */
    $vehiculo1 = new Vehiculo($_POST['selectorMarca'], $_POST['anoMatriculacion'], $_POST['potencia'], $_POST['selectorPuertas']);
    /**
     * Se imrpime el vehiculo gracias a toString.
     */
    echo $vehiculo1;
    }

    

?>