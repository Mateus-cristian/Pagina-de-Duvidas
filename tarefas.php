<section class="container items-accordion js-accordion">

<?php   
// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents('./data/duvidas.json');

// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo);

// Loop para percorrer o Objeto
foreach($json->lista_tarefas as $registro):
echo '<dt>' . $registro->titulo . '</dt>';
echo '<dd>' . $registro->descricao . '</dd>';
endforeach;
?>
</section>