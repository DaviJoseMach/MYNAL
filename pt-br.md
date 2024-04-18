# MyNal - Plataforma de Postagem de Artigos e Wiki para API 


O MyNal é uma plataforma desenvolvida para facilitar a postagem de artigos e servir como uma wiki para documentar APIs. Utiliza uma combinação de tecnologias modernas, incluindo PHP, MySQL, Bootstrap, HTML5, CSS3, JavaScript, React, Laravel, Tailwind e jQuery. Abaixo estão os links para as documentações de cada uma dessas tecnologias:

- [PHP](https://www.php.net/docs.php)
- [MySQL](https://dev.mysql.com/doc/)
- [Bootstrap](https://getbootstrap.com/docs/4.5/)
- [HTML5](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)
- [CSS3](https://developer.mozilla.org/en-US/docs/Web/CSS)
- [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
- [React](https://reactjs.org/docs/getting-started.html)
- [Laravel](https://laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com/docs)
- [jQuery](https://api.jquery.com/)

## Tecnologias Utilizadas

Aqui está uma tabela com as tecnologias utilizadas no projeto, juntamente com suas versões mais recentes:

| Tecnologia     | Versão      |
|----------------|-------------|
| PHP            | 8.1         |
| MySQL          | 8.0         |
| Bootstrap      | 4.5.2       |
| HTML5          | atual         |
| CSS3           | atual           |
| JavaScript     | atual           |
| React          | atual           |
| Laravel        | atual           |
| Tailwind CSS   | atual           |
| jQuery         | 3.5.1       |

## Instalação

Para instalar o MyNal em seu ambiente local, siga estes passos:

1. **Instale o MySQL**: Baixe e instale o MySQL em seu sistema. Você pode encontrar instruções de instalação na [documentação oficial do MySQL](https://dev.mysql.com/doc/).

2. **Instale o PHPMyAdmin**: O PHPMyAdmin é uma ferramenta gráfica para gerenciar bancos de dados MySQL. Baixe e instale o PHPMyAdmin seguindo as instruções na [página de downloads do PHPMyAdmin](https://www.phpmyadmin.net/downloads/).

3. **Baixe os arquivos do repositório**: Faça o download dos arquivos do repositório do MyNal e extraia-os em uma pasta em seu servidor local.

4. **Configuração do Banco de Dados**: Abra o PHPMyAdmin e crie um novo banco de dados chamado `mynal`. Em seguida, importe o arquivo `mynal.sql` fornecido com os arquivos do MyNal para criar as tabelas necessárias no banco de dados.

5. **Configuração do Arquivo `connect.php`**: Abra o arquivo `connect.php` e substitua as informações de host, usuário, senha e nome do banco de dados pelas suas próprias credenciais.

Exemplo do arquivo `connect.php`:
```php
<?php
    $host = 'localhost';
    $user = 'seu_usuario';
    $senha = 'sua_senha';
    $banco_de_dados = 'mynal';

    // fazendo a conexão
    $conexao = new mysqli($host, $user, $senha, $banco_de_dados);

   ?>
```


**Obtenção de Mais Informações e Suporte Adicional**: Caso você precise de mais informações, direcionamentos ou suporte adicional, você pode acessar diretamente a página de depuração do MyNal. Lá, você encontrará informações detalhadas de logs e instruções sobre como solucionar problemas comuns. Você pode acessar essa página em [DEBUG](https://github.com/DaviJoseMach/MYNAL/blob/main/front/debug-page/page.html).

**Entre em Contato**: Se precisar de ajuda adicional ou tiver alguma dúvida específica, sinta-se à vontade para entrar em contato comigo diretamente pelo meu [Twitter / X](https://twitter.com/davvzin). Estou sempre disponível para ajudar e responder às suas perguntas.


---
