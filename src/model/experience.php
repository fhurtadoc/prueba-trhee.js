<?php
include './object_inter.php';

class Experience  implements Object_inter {
    
    private $nom_company;
    private $begin;
    private $end;
    private $description;
    private $tecnologias;
    
    public function __construct($nom_company, $begin, $end, $description, $tecnologias)
    { 
        $this.$nom_company=$nom_company;
        $this.$begin=$begin;
        $this.$end=$end;
        $this.$description=$description;
        $this.$tecnologias=$tecnologias;

    }

    


}