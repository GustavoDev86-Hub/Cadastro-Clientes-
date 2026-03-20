🐘 Cadastro de Clientes (PHP & MariaDB)
Um sistema de gerenciamento CRUD (Create, Read, Update, Delete) desenvolvido com PHP puro, focado em simplicidade, performance e manipulação direta de dados.

📌 Sobre o Projeto
Este projeto foi construído para aplicar conceitos fundamentais de desenvolvimento web Server-side. Ele demonstra como estruturar uma aplicação funcional utilizando tags HTML para a interface e PHP para a lógica de persistência e regras de negócio.

🛠️ Stack Tecnológica
PHP 8+: Processamento de lógica e comunicação com o banco.

MariaDB: Sistema de gerenciamento de banco de dados relacional.

PDO (PHP Data Objects): Interface de abstração para acesso a dados com foco em segurança (Prepared Statements).

HTML5: Estruturação semântica da interface.

⚙️ Funcionalidades
✅ Cadastro: Inserção de novos registros via formulário.

✅ Consulta: Listagem dinâmica de clientes cadastrados no MariaDB.

✅ Edição: Recuperação e atualização de informações existentes.

✅ Exclusão: Remoção segura de registros do banco de dados.

📁 Estrutura do Projeto
Bash
Cadastro-Clientes/
│── db/
│   └── database.sql   # Script de criação das tabelas no MariaDB
│── includes/
│   └── conexao.php    # Configuração de conexão PDO
│── index.php          # Painel principal / Listagem
│── salvar.php         # Lógica de processamento (Insert/Update)
│── excluir.php        # Lógica de deleção
└── README.md
🚀 Como Executar o Projeto
Pré-requisitos
Ambiente de desenvolvimento local (XAMPP, Laragon ou servidor Apache manual).

Instância do MariaDB ativa.

Instalação
Clone o repositório:

Bash
git clone https://github.com/GustavoDev86-Hub/Cadastro-Clientes-
Configure o Banco:
Importe o arquivo SQL no seu console MariaDB ou via phpMyAdmin:

SQL
SOURCE db/database.sql;
Ajuste a Conexão:
Edite o arquivo de conexão com seu usuário e senha do banco de dados local.

Acesse via Browser:
http://localhost/Cadastro-Clientes-

🎯 Foco Acadêmico
O projeto explora:

Manipulação de superglobais ($_POST, $_GET).

Conexão e tratamento de erros com PDO.

Integração PHP + MariaDB sem o uso de frameworks.

Boas práticas em sistemas de informação para a internet.

👨‍💻 Autor
Gustavo Viana

Acadêmico de Tecnologia em Sistemas para a Internet

GitHub
