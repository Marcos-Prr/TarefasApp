# TarefasApp


### Sumario
 1. [Descrição](#description)
 2. [Condições do projeto](#project-conditions)
 3. [Requisitos do projeto](#project-requirements)
 4. [Instalação](#installation)
 5. [Executando](#running)
 6. [Visualização](#view)
 
 ## Descrição

> **Problema:** O dono de um estabelecimento solicitou que fosse desenvolvido uma aplicação, no qual fosse possível manipular uma lista de tarefas contendo informações úteis para ele. Uma tarefa deve possuir as seguintes informações:
> 
> 1.  **ID:** Identificador único da tarefa, para facilitar a identificação.
> 2.  **Nome:** Nome da tarefa.
> 3.  **Descrição:** Uma breve descrição a respeito do que é a tarefa.
> 4.  **Prazo:** data limite para que seja feito a tarefa
> 5.  **Prioridade:** Prioridade que definirá qual tarefa será executada primeiro.
> 6.  **Concluída:** informar se a tarefa já foi executada.

## Condições do Projeto

 - Todas as etapas do projeto deverão ser versionadas com o git;
 - Todas as etapas do projeto deverão ser versionadas com o git;
 - O código deverá ser escrito em PHP ou Node, usando arquitetura MVC;
 - API baseada em REST;
 - Tratamento de erros;
 
 ## Requisitos do Projeto

 - PHP7+ ;
 - MySQL5+ ;
 - xampp ;
 
 ## Instalação
  Primeiro de tudo você precisa clonar este repositório:
    git clone https://github.com/Marcos-Prr/TarefasApp
  
  Após isso , realize a instalação do xampp de acordo  com seu sistema :
      https://www.apachefriends.org/pt_br/index.html
      
  Mova o  projeto para o workspace do xampp  localizado em :
   ..xamp\htdocs\
   
  ## Executando
  execute na pasta xamp o xampp control  para iniciar os serviços apache e mysql ou inicie manualmente executando :
    service  apache start
    service mysql start
    
    
   Criação do banco de dados :
    #mysql -u root -p
    
    #create database tarefa;
    
    #use tarefa;
    
    criando tabela ;
    create table contatos (
     id int unsigned auto_increment primary key,
     nome varchar(80) not null,
     descricao varchar(20) default null,
     prazo datetime default null,
     prioridade varchar (20) default null,
     concluida varchar (80) default null
    );
   
   ## Visualização 
    Imagens  da execução do app :
    
     https://photos.google.com/photo/AF1QipNe43Rc77050t4uxt0a-wwm6lQCfI3R8iPdkG3a
   
    
    
    

   
   
  
  
