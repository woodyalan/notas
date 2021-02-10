<?php


class Nota
{
    private $id;
    private $usuarioId;
    private $titulo;
    private $descricao;
    private $criadoEm;
    private $atualizadoEm;

    private $conn;

    /**
     * Nota constructor.
     * @param $id
     * @param $usuarioId
     * @param $titulo
     * @param $descricao
     * @param $criadoEm
     * @param $atualizadoEm
     */
    public function __construct(
        $id = null,
        $usuarioId = null,
        $titulo = null,
        $descricao = null
    ) {
        $this->conn = new \lib\MySQL();

        $this->id = $id;
        $this->usuarioId = $usuarioId;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }

    public function save()
    {
        $sql = "INSERT INTO nota (
                    usuarioId,
                    titulo,
                    descricao
                ) VALUES (
                    $this->usuarioId,
                    '$this->titulo',
                    '$this->descricao'
                )";

        $this->conn->query($sql);
        $this->id = $this->conn->insert_id();
    }

    public static function getAll() : array
    {
        $result = [];
        $c = new \lib\MySQL();

        $sql = "SELECT * FROM nota";

        $q = $c->query($sql);

        while ($obj = $c->fetch_object($q)) {
            $result[] = $obj;
        }

        return $result;
    }

    /**
     * @return mixed|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed|null $id
     * @return Nota
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * @param mixed|null $usuarioId
     * @return Nota
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;
        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed|null $titulo
     * @return Nota
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed|null $descricao
     * @return Nota
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getCriadoEm()
    {
        return $this->criadoEm;
    }

    /**
     * @param mixed|null $criadoEm
     * @return Nota
     */
    public function setCriadoEm($criadoEm)
    {
        $this->criadoEm = $criadoEm;
        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getAtualizadoEm()
    {
        return $this->atualizadoEm;
    }

    /**
     * @param mixed|null $atualizadoEm
     * @return Nota
     */
    public function setAtualizadoEm($atualizadoEm)
    {
        $this->atualizadoEm = $atualizadoEm;
        return $this;
    }


}