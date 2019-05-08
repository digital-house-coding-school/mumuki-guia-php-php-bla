public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $resultados = $this->loop();
  
  $this->assertTrue(count($resultados) === 6, 'O array não tem 6 elementos');
 
  $numeros = true;
  foreach ($resultados as $key => $value) {
    if ($value == $key + 5) {
      $numeros = false;
      break;
    }
  }
  
  $this->assertTrue($numeros, "O array não tem números de 5 a 10");
  
  $cantFors = substr_count($sol, "for");
  
  $this->assertTrue($cantFors > 0, "Parecería que no escribiste ningún for...");
  
  $cant9 = substr_count($sol, "9");
  
  $this->assertTrue($cant9 == 0, "No deberías escribir los números a mano...");
}

private /*...content...*/