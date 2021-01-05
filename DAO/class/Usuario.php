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
    //FUNÇÃO QUE FAZ UM INSERT E RETORNA OS VALORES QUE FORAM INSERIDOS
    //a diferença desta é que ela pode ser chamada na declaração do objeto

    public function __construct($login = "", $password = ""){
        if($login != "" && $password != ""){
            $this->setDeslogin($login);
            $this->setDessenha($password);

            $this->insert();
        }
        //AREA CRIADA POR MIN PARA QUANDO NÃO FOR PASSADO NADA COMO PARAMETRO NO OBJETO, E FOR SOLICITADO QUE IMPRIMA ALGO.
        else{
            $data = array(
                "idusuario"=>"nenhum",
                "deslogin"=>"nenhum",
                "dessenha"=>"nenhum",
                "dtcadastro"=>$aux = (new DateTime())->format("d/m/Y H:i:s")
            );
            $this->setData($data);
        }
    }

    //Função que puxa todos os valores por um ID
    public function loadById($id){
        $sql = new SQL;

        $resultado = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));

        if(isset($resultado)){
            setData($resultado[0]);
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
    //FUNÇÃO QUE SETA TODAS AS VARIAVEIS DE UMA VEZ

    public function setData($data){
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }
    //FUNÇÃO QUE FAZ LOGIN SE OS DADOS ESTIVEREM CORRETOS
    
    public function login($login, $pass){
        $sql = new SQL;

        $resultado = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :DESLOGIN AND dessenha = :DESSENHA", array(":DESLOGIN"=>$login,":DESSENHA"=>$pass));

        if(count($resultado) > 0){
            setData($resultado[0]);
        }
        else{
            throw new Exception("Login e/ou Senha invalidos.");
        }
    }
    //FUNÇÃO QUE FAZ UM INSERT E RETORNA OS VALORES QUE FORAM INSERIDOS
    //para usa-la e necessario que tenha predefinido os atributos de usuario e senha

    public function insert(){
        $sql = new Sql;

        $result = $sql->select("CALL sp_usuarios_insert(:DESLOGIN, :DESSENHA)", array(":DESLOGIN"=>$this->getDeslogin(), ":DESSENHA"=>$this->getDessenha()));

        if(count($result) > 0){
            $this->setData($result[0]);
        }

    }

}