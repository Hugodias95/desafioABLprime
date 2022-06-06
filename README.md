# DesafioABLprime
##objetivo: crud em PHP para cadastro de moradores.

Para rodar o banco de dados na minha máquina utilizei as seguintes ferramentas: XAMPP e MySQL Workbench. 
Funcionei ele no localhost/crudphp/ após dar "Start" no Apache e MySQL pelo xampp. 

É necessário criar o banco de dados na máquina. Fiz a criação do banco usando o MySQL Workbench mas deixei abaixo o código para fazê-lo por linha de código.

Fiz o teste das funcionalidades e estão todas funcionando, é possível editar qualquer parte do cadastro (Nome/email/contato/unidade) e a alteração fica salva. Ao clicar em "Excluir" o cadastro é tirado do banco. Não é possível inserir um e-mail que não existe (sem o @, por exemplo) e ao finalizar o cadastro de um novo morador ele aparece no banco atualizado.

A única coisa que me incomodou bastante mas não consegui corrigir é que após salvarmos um "novo morador" a página não está voltando para a inicial index.php, mas avançando para uma página vazia. Porém, ao retornarmos manualmente a inserção já foi realizada. Os outros botões estão funcionando de acordo com o esperado.


CREATE DATABASE teste;

USE teste;

CREATE TABLE usuario2(
id int(11) AUTO_INCREMENT, NOT NULL
nome varchar(45) NOT NULL,
email varchar(45), NOT NULL
contato varchar(45), NOT NULL
unidade varchar(45), NOT NULL
);
