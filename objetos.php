<?php
class Livro {
    public $nome;
    public $autor;

    function __construct($nome, $autor) {
        $this->nome = $nome;
        $this->autor = $autor;
    }

    function get_nome() {
        return $this->nome;
    }

    function get_autor() {
        return $this->autor;
    }
}

$SoloLeveling = new Livro("Solo Leveling", "ChuGong");
echo "O nome do livro é: " , $SoloLeveling->get_nome();

echo "<br>";

echo "O autor do livro é: " , $SoloLeveling->get_autor();
?>
