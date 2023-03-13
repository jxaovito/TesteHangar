<?php
    

class Nota{
    private $nota1;
    private $nota2;
    private $nota3;

    public function __construct($n1, $n2, $n3){
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
    }

    public function getNota1(){
        return $this->nota1;
    }

    public function getNota2(){
        return $this->nota2;
    }

    public function getNota3(){
        return $this->nota3;
    }

    public function calculaMedia(){
       $this->media = ((int)$this->nota1 + (int)$this->nota2 + (int)$this->nota3) / 3 ;
       if(empty($this->nota1 or $this->nota2 or $this->nota3)){
        echo 'Insira todas as três notas para calcular a média';
       } else if($this->media < 5){
        echo 'Aluno reprovado';
       } else if($this->media >= 5 and $this->media < 7){
        echo 'Aluno ficou em exame';
       } else {
        echo 'Aluno aprovado';
       } 
    }

    }



?>