🐘 Cadastro de Clientes - PHP & MariaDB (Dockerized)
Uma aplicação robusta de gerenciamento de clientes desenvolvida em PHP puro, estruturada para rodar em ambientes conteinerizados e focada em operações fundamentais de sistemas web.

📌 Sobre o Projeto
Este projeto foi desenvolvido para consolidar conhecimentos em Sistemas para a Internet, focando na comunicação entre o servidor (PHP) e o banco de dados (MariaDB) utilizando boas práticas de segurança, como Prepared Statements via MySQLi.

🛠️ Stack Tecnológica
PHP 8.2: Processamento lógico no lado do servidor.

MariaDB 10.11: Sistema de gerenciamento de banco de dados relacional.

Docker & Docker Compose: Orquestração de containers para garantir portabilidade.

HTML5 & CSS3: Estrutura e estilização da interface do usuário.

⚙️ Funcionalidades
✅ Criação de Clientes: Cadastro com validação simples e persistência segura.

✅ Listagem em Tempo Real: Visualização de registros ordenados pelo ID.

✅ Exclusão com Confirmação: Remoção de dados via parâmetro GET com alerta de segurança.

✅ Ambiente Isolado: Execução via Docker sem necessidade de configurar ambiente local manualmente.

📁 Estrutura do Repositório
Bash
Cadastro-Clientes/
│── Dockerfile         # Configuração da imagem PHP + MySQLi
│── docker-compose.yml # Orquestração dos serviços (App na porta 8083)
│── index.php          # Interface principal e listagem de clientes
│── processa.php       # Lógica de inserção no banco de dados
│── excluir.php        # Lógica de remoção de registros
└── README.md
🚀 Como Executar com Docker
Pré-requisitos
Docker instalado.

Docker Compose instalado.

Passos para subir a aplicação
Clone o repositório:

Bash
git clone https://github.com/GustavoDev86-Hub/Cadastro-Clientes-
cd Cadastro-Clientes-
Suba os containers:

Bash
docker-compose up -d --build
Acesse a aplicação:
Abra o navegador e digite: http://localhost:8083.

🎯 Foco Acadêmico
O projeto aplica conceitos práticos de:

Integração entre PHP e MariaDB no ambiente Docker.

Uso de MySQLi para manipulação de dados.

Gerenciamento de portas e mapeamento de volumes em containers.

👨‍💻 Autor
Gustavo Viana

Acadêmico de Tecnologia em Sistemas para a Internet (IFMS).

Desenvolvedor Web focado em Backend e Infraestrutura.

GitHub

Acadêmico de Tecnologia em Sistemas para a Internet

GitHub
