POKÉDEX LARAVEL

O projeto consiste em uma Pokédex desenvolvida por Victor Hanszman utilizando o framework Laravel e a linguagem PHP. Foi utilizado o GuzzleHttp para realizar a conexão com a API Pokeapi.co.

Para rodar a aplicação localmente, é necessário acessar o diretório da pasta do projeto pelo terminal e executar o seguinte comando: 

"php artisan serve --port=[PORTA]".

Pode-se utilizar qualquer porta, como a "122" por exemplo.

Em seguida, o Laravel vai retornar um endereço a ser utilizado na url do navegador.
Ex: http://127.0.0.1:122/


Caso de Teste:

1-) Selecione a Região "Kanto";    
2-) Selecione o Pokémon "#004 - Charmander";     
3-) Verifique se ele possui 39 de HP e um peso de 8.5 Kg.       


Link do projeto em produção no servidor do Heroku:
https://damp-peak-81551.herokuapp.com/
