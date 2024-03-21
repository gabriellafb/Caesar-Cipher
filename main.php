<?php

function decodificarCifraDeCesar($mensagem, $deslocamento) {
    $tamanhoAlfabeto = 26;
    $mensagemDecodificada = '';

    
    for ($i = 0; $i < strlen($mensagem); $i++) {
        $caractere = $mensagem[$i];

        
        if (ctype_upper($caractere)) {
            
            $novoIndice = ord($caractere) - ord('A') - $deslocamento;

            
            $novoIndice = ($novoIndice + $tamanhoAlfabeto) % $tamanhoAlfabeto;

            
            $mensagemDecodificada .= chr($novoIndice + ord('A'));
        } else {
            
            $mensagemDecodificada .= $caractere;
        }
    }

    return $mensagemDecodificada;
}


function resolverProblema() {
    
    $n = intval(trim(fgets(STDIN)));

    
    for ($i = 0; $i < $n; $i++) {
        
        $mensagemCodificada = trim(fgets(STDIN));
        $deslocamento = intval(trim(fgets(STDIN)));
        
        
        $mensagemDecodificada = decodificarCifraDeCesar($mensagemCodificada, $deslocamento);
        echo $mensagemDecodificada . "\n";
    }
}


resolverProblema();

?>