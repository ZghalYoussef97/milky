<?php
    class promotion
    {
        private $idprom;
        private $idProduit;
        private $pourcentage;
        private $dateD;
        private $dateF;

        function __construct($idprom,$idProduit,$pourcentage,$dateD,$dateF){
            $this->idprom = $idprom;
            $this->idProduit= $idProduit;
            $this->pourcentage = $pourcentage;
            $this->dateD = $dateD;
            $this->dateF = $dateF;
        }

       
      
       
        function getidprom(){
            return $this->idprom;
        }


        function getidProduit(){
            return $this->idProduit;
        }

        function getpourcentage(){
            return $this->pourcentage;
        }

        function getdateD(){
            return $this->dateD;
        }

        function getdateF(){
            return $this->dateF;
        }

        function getprix_reduc(){
            return $this->prix_reduc;
        }

          function setidProduit($idProduit){
            $this->idProduit = $idProduit;
        }

        function setpourcentage($pourcentage){
            $this->pourcentage = $pourcentage;
        }

        function setdateD($dateD){
            $this->dateD = $dateD;
        }

        function setdateF($dateF){
            $this->dateF = $dateF;
        }


    }
?>