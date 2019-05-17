Esta função recebe um array associativo parecido com esse:

```
$cantores = [
  "Gilberto" => "Gil",
  "Tim" => "Maia",
  "Luiz" => "Gonzaga"
];
```

Onde os nomes estão na **chave** e os sobrenomes estão no **valor** de cada um dos elementos do array.

Usando a sintaxe `foreach($array as $chave => $valor)` (Lembre-se que os nomes das variáveis são de sua escolha!) Sua tarefa é trocar as chaves pelos valores dentro do array`$resultado`

O resultado deve ser este:

```
$cantores = [
  "Gil" => "Gilberto",
  "Maia" => "Tim",
  "Gonzaga" => "Luiz"
];
```