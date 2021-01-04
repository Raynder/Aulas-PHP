<?php 

class Usuario {
    //Atributos da class Usuario

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    //Gets and Seters for class Usuario

    public function getIdusuario(){
        return $this->idusuario;
    }

    public function getDeslogin(){
        return $this->deslogin;
    }

    public function getDessenha(){
        return $this->dessenha;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }

    public function setIdusuario($id){
        $this->idusuario = $id;
    }

    public function setDeslogin($dl){
        $this->deslogin = $dl;
    }

    public function setDessenha($ds){
        $this->dessenha = $ds;
    }

    public function setDtcadastro($dt){
        $this->dtcadastro = $dt;
    }

    //Função que puxa todos os valores por um ID
    public function loadById($id){
        $sql = new SQL;

        $resultado = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));

        if(isset($resultado)){
            $row = $resultado[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));

        }
    }
    //Função retorna todos os valores do banco

    public static function getList(){
        $sql = new Sql;

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }
    //FUNÇÃO QUE BUSCA POR REFERENCIA DE UMA STRING

     static function search($login){
        $sql = new Sql;

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(':SEARCH' => "%".$login."%"));
    }

    //Funcion que sera ativa semque que for feito um echo no objeto

    public function __toString(){
        return json_encode(array(
            "idusuario" => $this->getIdusuario(),
            "deslogin" => $this->getDeslogin(),
            "dessenha" => $this->getDessenha(),
            "dtcadastro" => $this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }

    
    public function login($login, $pass){
        $sql = new SQL;

        $resultado = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :DESLOGIN AND dessenha = :DESSENHA", array(":DESLOGIN"=>$login,":DESSENHA"=>$pass));

        if(count($resultado) > 0){
            $row = $resultado[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));

        }
        else{
            throw new Exception("Login e/ou Senha invalidos.");
        }
    }

}