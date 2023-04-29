<?php
  // Obter os dados enviados pelo Arduino
  $id = $_POST['id'];
  $temperature = $_POST['temperature'];
  $humidity = $_POST['humidity'];
  $sensorInfra = $_POST['sensorInfra'];
  $temperature_2 = $_POST['temperature_2'];
  $humidity_2 = $_POST['humidity_2'];
  $sensorInfra_2 = $_POST['sensorInfra_2'];
  $Fogo = $_POST['Fogo'];
  $nivelFogo_2 = $_POST['nivelFogo_2'];
  $Gas = $_POST['Gas'];
  $NivelGas_2 = $_POST['NivelGas_2'];

  // Configurar as informações do banco de dados
  $servername = "85.10.205.173";
  $username = "sabinamatos221";
  $password = "001000000010";
  $dbname = "air2sitel1sensor";

  // Conectar-se ao banco de dados
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar se a conexão foi bem sucedida
  if ($conn->connect_error) {
    die("Erro ao conectar-se ao banco de dados: " . $conn->connect_error);
  }

  // Inserir os dados na tabela
  $sql = "INSERT INTO sensores (id, temperature, humidity,sensorInfra, temperature_2, humidity_2,sensorInfra_2, Fogo,Gas, nivelFogo_2,NivelGas_2) VALUES ($id, $temperature, $humidity,$sensorInfra,$temperature_2, $humidity_2,$sensorInfra_2, $Fogo ,$Gas,$nivelFogo_2,$NivelGas_2)";

  if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }

  // Fechar a conexão com o banco de dados
  $conn->close();
?>
