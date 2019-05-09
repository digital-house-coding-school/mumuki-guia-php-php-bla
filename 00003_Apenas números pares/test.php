public function testDescriptionExample(): void {
  $solucao = '/*...content...*/';

  $resultado = $this->bucles();

  $this->assertTrue(count($resultado) === 10, 'O array não tem 10 elementos');

  $arrayValido = true;
  for ($i = 2; $i <= 20; $i += 2) {
    if ($resultado[$i] != $i) {
      $arrayValido = false;
      break;
    }
  }

  $this->assertTrue($arrayValido, "O array não tem números de 2 a 20");

  $contaFor = substr_count($solucao, "for");

  $this->assertTrue($contaFor > 0, "Parece que você não utilizou nenhum for :(, tente resolver utilizando pelo menos um for!");

  $conta10 = substr_count($solucao, "10");

  $this->assertTrue($conta10 == 0, "Não escreva os números manualmente, tente utilizar um for!");

  $contaIf = substr_count($solucao, "if");

  $this->assertTrue($contaIf == 0, "Não utilize o if para resolver o exercício!");
  }

  private /*...content...*/