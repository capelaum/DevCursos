# DevCursos

Aplicação PHP Simples de projeto de exibição de dados através do Banco de Dados MySQL.

## Executando

### Configurar Banco de Dados MySQL

Para executar o programa primeiramente tem que ter instalado o MySQL em seu ambiente e 
criar uma database e a tabela cursos, para isso basta utilizar o arquivo [bd.sql](bd/bd.sql) 
dentro da pasta bd e executar o script sql na database de sua preferência, 
bastando fazer as modificações necessárias no arquivo [config/bd.php](config/bd.php) caso necessário.

### Instalar dependências do composer

```bash
# Na pasta raiz do projeto
$composer install
```

### Subindo aplicação

```bash
# Na pasta raiz do projeto
$php -S 127.0.0.1:8080
```

:wink: Acessar [127.0.0.1:8080](127.0.0.1:8080) no navegador e ver a aplicação rodando 




