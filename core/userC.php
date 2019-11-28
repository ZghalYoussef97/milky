<?php
    include "../config.php";
    include "../entities/user.php";
3
    class userc{
        function ajoutuser($F){
            $sql = "INSERT INTO `user` (`username`, `password`, `email`, `rang`) VALUES (NULL, :password, :email, :rang)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':password',$F->getpassword());
                $req->bindValue(':email',$F->getemail());
                $req->bindValue(':rang',$F->getrang());
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
                    // if(strpos($e->getMessage(), 'SQLSTATE[23000]') !== false)
                    //     echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
            }    
        }

        function getuser(){
            $sql="SELECT * FROM `user`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        function getusersNumber(){
            $sql="SELECT count(*) FROM `user`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        function deleteuser($username){
            $sql = "DELETE FROM `user` WHERE `user`.`username` = :username";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':username',$username);
                $req->execute();
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
    }
?>