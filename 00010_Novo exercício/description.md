Neste caso, a função recebe um array `$cantores` com a seguinte estrutura:

```
<?php
  $cantores = [
    0 => [
      "nome" => "Luiz",
      "sobrenome" => "Gonzaga"
    ],
    1 => [
      "nome" => "Tim",
      "sobrenome" => "Maia"
    ],
    2 => [
      "nome" => "Gilberto",
      "sobrenome" => "Gil"
    ]
  ];
```

Seu objetivo é preencher o array `$nomes` apenas com os nomes dos cantores recebidos.

Para percorrer os arrays, pedimos que você utilize um **foreach**