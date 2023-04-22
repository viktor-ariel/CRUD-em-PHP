<?php
    class Usuarios{
        public $nome;
        public $email;
        public $senha;

        function __construct($atrib = array()){
            if(!empty($atrib)){
                $this->nome = $atrib['nome'];
                $this->email = $atrib['email'];
                $this->senha = $atrib['senha'];
            }
        }

        public function verificaUsuario ($pdo){
            $sth = prepare("SELECT * FROM usuarios WHERE email=:email AND senha=:senha");
            $sth = blindValue('email',$email);
            $sth = blindValue(':senha',$senha);
            $sth = execute();
            return $sth;
        }

    }

?>