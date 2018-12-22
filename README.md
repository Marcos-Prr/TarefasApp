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
    
  ![enter image description here](https://lh3.googleusercontent.com/A0kkhSLY5hd2ZRD5g2haHDUMZkBBSaG3EMPpeIi4AJNRmDBi1WFAH8dGUF19Eet1m7M4dm5MaAkS4dyG0EupXKL9vlbRmNmS3QkvELN6Oi9CwCA0bB9QL9VM298NZXZu-Its-qfjzh44BBPO3YNU3BA5I8LczgeO_X3Tifcawov2uPWRXLFZBibEYIjOvxxEHEwllqtrhSfs4vOdCBfM8ByJqCkuzNrXSBTQPD_XzO4ukjSQIOtaqUv_M9V-2OIh5vjV6iLlJa6brcO3VzO6_8D5CyFQO0zhFNO03kTSR6x4ofeW-KbNH-S2wunpvTvQbdMSnhbvulWrgEVkhrMJrDLS_yMz_ZkO-JRYf6slAHsYQ4wJurPhPkF0QxHF2EgCrIW2kslXCixUUCNaCR5fS965Fsge3uw9rBcVzQU9wgi7AqJj4LjnQhzIhL1saYVsg9tGRxwVkbdoWexq0tb9iJW1YSF52LCaUHiRXKUpxXhFj-0pQD2n24FbkJVqcjMyPis6UWCswccxYpC0rV1qxihkAGNhtEII_b4IEl-8z_HHueWem6iP-Z5w0l4RAZR1NjjpcHBAN1xXXNAxqa3a66F7_KxjqlVT0K8uh5-qNbVvgKO5Asm-rlqYa_SDM2eu1ni6W__Y32rByJlwmC3fY-tS=w1360-h632-no "View inicial")  
    
    
    

   
   
  
  
