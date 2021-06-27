# EngSoft-FramMetAgeis

*Portifólio (Ciclo 2)*

Vamos começar a desenvolver utilizando frameworks. Para tal, faça o download do Bootstrap, do JQuery e do XAMPP:
1) Bootstrap: Disponível em: <http://getbootstrap.com.br/>.
2) JQuery: Disponível em: <http://jquery.com/>.
3) XAMPP (Apache + MariaDB + PHP + Perl):
a) Instalador disponível em: <https://www.apachefriends.org/pt_br/index.html>. Não se esqueça de escolher uma das versões, Windows, Linux ou Apache. Recomendamos que seja em Linux.
b) Portable (Windows) disponível em: < https://portableapps.com/apps/development/xampp>.
4) Linux (Ubuntu Mate) disponível em: <https://ubuntu-mate.org/download/>.
5) Tarefas:

a) Crie as tabelas do diagrama a seguir em MySQL (Figura 1). Campos NOT NULL tem losango preenchido.
b) Crie um cabeçalho e um rodapé que serão padrão em seu pequeno site. No cabeçalho coloque o menu que chamará a listagem de Unidades Federativas e de Municípios.
c) Crie, utilizando tabelas, uma página para listar os Municípios e outra para listar Unidades Federativas. Além das colunas, acrescente uma coluna de Operações que, no topo deve chamar o formulário de cadastro, e em cada linha deve haver um link para chamar o formulário de edição (alteração, modificação) e outro link para confirmar a exclusão do item. Se desejar utilizar ícones, utilize conforme indicado no seguinte link: <http://fontawesome.io/icons/>. Baseie-se no exemplo da Figura 2.
d) Crie um formulário para inserir os Municípios e outro para inserir as Unidades Federativas.
e) Crie um formulário para editar os Municípios e outro para inserir as Unidades Federativas.
Obs.: todas as páginas e formulários devem ser criados utilizando o Bootstrap.

         Verifique as imagens no PEGE

*Você precisa entregar:*

- Script do banco de dado em Linguagem SQl para MySQL (item a)

- Páginas em bootstrap simulando o acesso ao banco de dados (Itens b até e)

================================================================================================

*Portifólio (Ciclo 3)*

1) Implemente toda a validação dos formulários utilizando JQuery, de acordo com o modelo do banco de dados. Campos NOT NULL tem losango preenchido.

2) Faça as interações necessárias com o usuário com o uso de JQuery, como, por exemplo, avisos e alertas.

*Critérios de avaliação*
• Utilização de Bootstrap
• Semântica correta.
• Utilização de JQuery.
• Design agradável para uma aplicação.
• Cumprir conforme o solicitado referente à atividade.
• Não deve acessar banco de dados!

Nenhuma linguagem (PHP, Java,etc) além de HTML/CSS/Javascript deve ser utilizada

================================================================================================

*Portfólio (Ciclo 4)*
Descrição da atividade
Dando continuidade ao pequeno site que estamos construindo, faça o que se pede a seguir:
1) Altere os documentos HTML do Ciclo 3 para o formato blade do Laravel.
2) Crie as rotas necessárias para fazer os dois CRUDs.
3) Crie os Models e Controllers para concluir os CRUDs.

*Critérios de avaliação*
• Utilização de Bootstrap.
• Utilização de JQuery.
• Utilização de Laravel.
• Design agradável para uma aplicação.
• Cumprir conforme o solicitado referente à atividade.
• Nesta unidade, você deve acessar o banco de dados!

Comandos usados

composer create-project laravel/laravel
php artisan key:generate
php artisan serve

//Criar Controller - resource
php artisan make:controller NomeController --resource

================================================================================================

*README FROM Laravel*

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
