<?php               
    function conectabanco(){
        $con = new PDO("mysql:host=localhost;dbname=banco", "root", "aluno");
        return $con;
    }

    function insertUser($nome, $email, $senha){
        try{
            $con=conectabanco();
            $sql = "INSERT INTO user (nome, email, senha) VALUES (?, ?, ?)";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $nome);
            $stm->bindParam(2, $email);
            $stm->bindParam(3, $senha);
            $stm->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function altUser($id, $nome, $email, $senha){
        try{
            $con=conectabanco();
            $sql = "UPDATE user SET email = ?, senha = ?, nome = ? WHERE id = ?;";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $email);
            $stm->bindParam(2, $senha);
            $stm->bindParam(3, $nome);
            $stm->bindParam(4, $id);
            $stm->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function delUser($id){
        try{
            $con=conectabanco();
            $sql = "DELETE FROM user WHERE id = ?;";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $id);
            $stm->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }  

    function listUser(){
        try{
            $con=conectabanco();
            $sql="SELECT * FROM user";
            $stm=$con->prepare($sql);
            $stm->execute();
            $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    function getUser($id){
        try{
            $con=conectabanco();
            $sql="SELECT * FROM user WHERE id=?";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $id);
            $stm->execute();
            $result=$stm->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    function verificarCadastro($email){
        try{
                $con=conectabanco();
                $sql="SELECT * FROM usuario WHERE email LIKE ?;";
                $stm=$con->prepare($sql);
                $stm->bindParam(1, $email);
                $stm->execute();
                $result=$stm->fetch(PDO::FETCH_ASSOC);
            } catch(PDOException $e){
                echo $e->getMessage();
            }
            return $result;
        }

    function login($email, $senha){
        try{
            $con=conectabanco();
            $sql="SELECT * FROM user WHERE email LIKE ? AND senha LIKE ?;";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $email);
            $stm->bindParam(2, $senha);
            $stm->execute();
            $result=$stm->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }
?>