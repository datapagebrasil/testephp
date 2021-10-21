# Teste datapage PHP

## Padrão

- Os locais que estiverem '???' estão aguardando você completar o comando para o sucesso do mesmo.

- Para as evidências, salvar no arqivo **evidencias.doc** (na raiz), ou semelhante, e colocar o número da atividade, prints e informações necessárias, enviando todas em um único arquivo.

## O que será analisado

- As evidências (prints) quando a atividade não gerar código e o próprio código.

- Reutilização / duplicação de código / funções.

- A qualidade e organização do código.

- O tempo entre o inicio da atividade e o envio para o git.

- Quantidade de acertos - Quantidade de bugs.

## Cenário

Nosso cliente tem um sistema de vendas muito básico.
Contém apenas 3 tabelas, clientes, vendas e vendas_itens. Ele nos solicitou algumas apis e um cadastro de cliente via browser.

Api para consultar dados dos clientes com suas vendas, exportando para excel e pdf e caso necessário atualizar.

E um cadastro web para para criar novos clientes.

Vamos separar isto em **Atividades**.

## Instalação

- Baixar este repositório via git clone

`git clone ???`

- Após o clone, entrar na pasta e ligar o docker-compose

`docker-compose up`

- Entrar na pasta laravel-teste

`cd laravel-teste`

`composer install`

`php artisan serve`

- Acessar http://127.0.0.1:8000/teste e ter o retorno em json da tabela clientes

Algo semelhante a isto: 

``[{"id":1,"nome":"Pedro","telefone":"(62) 98180-0001","cpf":"007.412.123-12","data_cadastro":"2021-10-07 10:53:01.000000","data_alteracao":null},{"id":2,"nome":"Vivian","telefone":"(62) 98010-8212"...]``

## Atividades

- Não é necessário retornar o json exatamente como sugerido nos exemplos esta é apenas uma sugestão para organização / padrão.

Videos de explicação:

- [Instrução video 1 - 5minutos](/instrucao-1.mp4)
- [Instrução video 2 - 5minutos](/instrucao-2.mp4)
- [Instrução video 3 - 2minutos](/instrucao-3.mp4)

- [Atividade 1](/atividades/atividade1.md)
- [Atividade 2](/atividades/atividade2.md)
- [Atividade 3](/atividades/atividade3.md)
- [Atividade 4](/atividades/atividade4.md)
- [Atividade 5](/atividades/atividade5.md)
- [Atividade 6](/atividades/atividade6.md)
- [Atividade 7](/atividades/atividade7.md)
- [Atividade 8](/atividades/atividade8.md)
- [Atividade 9](/atividades/atividade9.md)
- [Atividade 10](/atividades/atividade10.md)


# Parabéns

Obrigado, por participar do nosso processo seletivo.
Favor entrar em contato com o responsável pelo processo seletivo.

Equipe Datapage
