<?php
class Materia
{

    public $materia = null;
    public $creditos = 0;
    public $semestre = 0;
    public $culminada = 0;

    function __construct(string $materia, int $creditos, int $semestre, int $culminada){
        $this->materia = $materia;
        $this->creditos = $creditos;
        $this->semestre = $semestre;
        $this->culminada = $culminada;
    }
    
    public static function createFromArray($arr)
    {
        $estudiante = new Materia( $arr["materia"],$arr["creditos"],$arr["semestre"],$arr["culminada"]);
        //$estudiante->setTexto($arr["texto"]);
        return $estudiante;
        
    }


    /**
     * Get the value of numero
     */ 
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setMateria($materia)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getCreditos()
    {
        return $this->creditos;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;

        return $this;
    }

    /**
     * Get the value of img
     */ 
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

       /**
     * Get the value of texto
     */ 
    public function getCulminada()
    {
        return $this->culminada;
    }

    /**
     * Set the value of texto
     *
     * @return  self
     */ 
    public function setCulminada($culminada)
    {
        $this->texto = $culminada;

        return $this;
    }
}
?>