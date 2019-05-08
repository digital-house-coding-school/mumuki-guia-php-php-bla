public function testDescriptionExample(): void {
  $solucao = '/*...content...*/';
  
  $resultados = $this->loop();
  
  $this->assertTrue(count($resultados) === 11, 'Seu array não tem 11 elementos');
 
  $numeros = $resultados[0] == 0 && $resultados[1] == 1 && $resultados[2] == 2 && $resultados[3] == 3 && $resultados[4] == 4 && $resultados[5] == 5 && $resultados[6] == 6 && $resultados[7] == 7 && $resultados[8] == 8 && $resultados[9] == 9 && $resultados[10] == 10;
  
  $this->assertTrue($numeros, "O array não tem números de 0 a 10");
  
  $contadorFor = substr_count($solucao, "for");
  
  $this->assertTrue($contadorFor > 0, "Parece que você não utilizou nenhum for :(, tente resolver utilizando pelo menos um for!");
  
  $contador9 = substr_count($solucao, "9");
  
  $this->assertTrue($cant9 == 0, "Não preencha seu array manualmente...");
}

private /*...content...*/