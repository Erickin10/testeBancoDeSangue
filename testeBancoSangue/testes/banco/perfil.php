<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>

</head>
<body>
     
    <h1>Perfil</h1>

    <table border="2px">

        <tr>
            <th>
                Adicionar dados de Receptor 
            </th>
            <th>
                Adicionar dados de Doador
            </th>
        </tr>
        
        <tr>
            <td>
                <form method="POST" action="processa.php">
                    <div id="dadosReceptorDiv">
                        <fieldset id="dadosReceptor">
                            <p><label for="ctipoSangueR">Tipo Sanguineo: </label> 
                                <input type="text" name="tipoSangueR" id="ctipoSangueR" placeholder="Ex: AB-"></p>
                        </fieldset>
                                                    
                        <input type="submit" value="Cadastrar">
                    </div>
                </form> 
            </td>
            
            <td>
                <form method="POST" action="processa.php"> 
                    <div id="dadosDoadorDiv">
                        <fieldset id="dadosDoador">
                            <p><label for="ctipoSangueD">Tipo Sanguineo: </label> 
                                <input type="text" name="tipoSangueD" id="ctipoSangueD" placeholder="Ex: AB-"></p>

                            <fieldset id="tatuagem">
                                <legend>Possui tatuagem?</legend> 
                                    <input type="radio" name="tatuagem" id="cSimt"> <label for="cSimt"> Sim </label>
                                    <input type="radio" name="tatuagem" id="cNaot"> <label for="cNaot"> Não </label>
                            </fieldset>

                            <p><label for="cPeso">Peso: </label> 
                                <input type="float" name="peso" id="cPeso" placeholder="Ex: 73.4"></p>
                            
                            <fieldset id="hepatite">
                                <legend>Já teve hepatite após os 11 anos?</legend> 
                                    <input type="radio" name="hepatite" id="cSimh"> <label for="cSimh"> Sim </label>
                                    <input type="radio" name="hepatite" id="cNaoh"> <label for="cNaoh"> Não </label>
                            </fieldset>
                            
                            <fieldset id="dst">
                                <legend>Possui alguma DST?</legend> 
                                    <input type="radio" name="dst" id="cSimd"> <label for="cSimd"> Sim </label>
                                    <input type="radio" name="dst" id="cNaod"> <label for="cNaod"> Não </label>
                            </fieldset>
                            
                            <fieldset id="htlv">
                                <legend>Possui alguma doença ligada ao viruz HTLV 1 e 2?</legend> 
                                    <input type="radio" name="htlv" id="cSimv"> <label for="cSimv"> Sim </label>
                                    <input type="radio" name="htlv" id="cNaov"> <label for="cNaov"> Não </label>
                            </fieldset>
                            
                        </fieldset>

                        <input type="submit" value="Cadastrar">
                   </div>
                </form> 
            </td>
        </tr>

    </table>

    

</body>
</html>