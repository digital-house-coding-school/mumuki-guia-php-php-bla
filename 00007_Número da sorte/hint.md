Neste caso, vamos dizer algo como: "enquanto o número não é um 5 ... "

Podemos escrever assim:

```
    while (NÃO FOR UM 5) {

    }
```

Agora, vamos manipular os números do array `$dados`. Nosso **while** seria parecido com esse...

```
  while ($dados[POSIÇÃO] == 5) {

  }
```

E essa POSIÇÃO? Como em um **for** podemos ter a variável `$i` que traz um índice da posição do array.

Podemos escrever assim:

```
  $i = 0;
  while ($dados[$i] == 5) {
    //Seu código vem aqui!
    $i++;
  }
```

Desta maneira, `$i` começa em 0 mas a cada loop do **while** `$i` aumenta em 1.