<pre>
    <?php
    $diaInicial = date("m-d-Y", strtotime("-7 days"));
    $diaFinal = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $diaInicial .'\'&@dataFinalCotacao=\''. $diaFinal .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
    $dados = json_decode(file_get_contents($url), true);

    $cotação = $dados["value"][0]["cotacaoCompra"];

    echo "A cotação foi: $cotação";
    ?>
</pre>