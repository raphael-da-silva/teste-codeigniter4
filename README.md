# Teste da vaga de codeigniter

Link das instruções do teste: https://github.com/amzmp/backend-careers

Autor: https://github.com/raphael-da-silva

## Usuário admin de login
O usuário padrão deve ser criado rodando o Seeder criado chamado `AdminUserSeeder` para gerar esse usuário no banco de dados.

## Banco de dados

O nome do banco é `teste_codeigniter`

Rodar o seguinte código SQL para criar as tabelas do banco.

```sql

DROP TABLE IF EXISTS clients;
CREATE TABLE `clients` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `name` varchar(70) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tabela com clientes';

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabela dos usuários de login';

```

## Rodar o projeto

É necessário rodar o composer para instalar as dependencias e criar a pasta vendor. E vc pode usar o servidor embutido do PHP para subir o projeto.