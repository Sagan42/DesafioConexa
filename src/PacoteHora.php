<?php
    class PacoteHora{
        // ID do Pacote
        public int $id;
        // Nome do Pacote
        public string $nome;
        // Array contendo IDs das salas em que o pacote é válido
        public array $salasValido;
        // Quantidade de horas total do pacote
        public int $qtdHoras;
        // Quantidade de horas já utilizadas do pacote
        public int $qtdUtilizada;
        public function __construct(int $id, string $nome, array $salasValido, int $qtdHoras, int $qtdUtilizada){
            $this->id = $id;
            $this->nome = $nome;
            $this->salasValido = $salasValido;
            $this->qtdHoras = $qtdHoras;
            $this->qtdUtilizada = $qtdUtilizada;
        }
    }
    
    function getPacotesValidos($pacotes, $id_sala, $qtd_horas){
        $salasDisp = [];
        foreach ($pacotes as $p){
            //Percorremos o array com os pacotes
            foreach ($p->salasValido as $sala){
                //Verificamos o array de id de salas e a quantidade de horas dinponíveis em busca de matchs
                if ($sala == $id_sala and $p->qtdHoras - $p->qtdUtilizada >= $qtd_horas){
                    array_push($salasDisp, $p);
                }
            }

        }
        return $salasDisp;     
    }