<?php


class Usuario
{
    private $id;
    private $nome;
    private $email;
    private $senha;

    private $conn;

    /**
     * Usuario constructor.
     * @param $id
     * @param $nome
     * @param $email
     * @param $senha
     */
    public function __construct($id = null, $nome = null, $email = null, $senha = null)
    {
        $this->conn = new \lib\MySQL();

        if ($id) {
            $sql = "SELECT * FROM usuario WHERE $id = $id";

            $obj = $this->conn->fetch_object($this->conn->query($sql));

            $this->id = $obj->id;
            $this->nome = $obj->nome;
            $this->email = $obj->email;
        } else {
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }
    }

    public function save()
    {
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$this->nome', '$this->email', '$this->senha')";

        $this->conn->query($sql);

        $this->id = $this->conn->insert_id();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Usuario
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed|null $nome
     * @return Usuario
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed|null $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed|null $senha
     * @return Usuario
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }
}