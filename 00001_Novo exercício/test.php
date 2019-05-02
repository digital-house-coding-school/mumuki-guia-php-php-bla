public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $resultados = $this->bucles();
  
  $this->assertTrue(count($resultados) === 11, 'El array no tiene 11 elementos');
 
  $numeros = $resultados[0] == 0 && $resultados[1] == 1 && $resultados[2] == 2 && $resultados[3] == 3 && $resultados[4] == 4 && $resultados[5] == 5 && $resultados[6] == 6 && $resultados[7] == 7 && $resultados[8] == 8 && $resultados[9] == 9 && $resultados[10] == 10;
  
  $this->assertTrue($numeros, "El array no tiene los numeros del 0 al 10");
  
  $cantFors = substr_count($sol, "for");
  
  $this->assertTrue($cantFors > 0, "Parecería que no escribiste ningún for...");
  
  $cant9 = substr_count($sol, "9");
  
  $this->assertTrue($cant9 == 0, "No deberías escribir los números a mano...");
}

private /*...content...*/