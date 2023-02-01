<h1>Back-end Challenge 🏅 2021 - Space Flight News</h1>

<p>Este projeto é um desafio para verificar minhas habilidades como desenvolvedora back-end. Foi desenvolvido uma REST API utilizando os dados do projeto Space Flight News, uma API pública com informações relacionadas a voos espaciais. O projeto teve como objetivo criar a API permitindo assim a conexão de outras aplicações.</p>

<h2>💡 Como executar o projeto</h2>

<h3>Clonar o repositório</h3>

```
git clone https://github.com/rayllaluiiza/space_flight_news_api.git
```

<h3>Acessar a pasta do projeto</h3>

```
cd space_flight_news_api
```

<h3>Gerar o arquivo .env</h3>

```
cp .env.example .env
```

<h3>Alterar as variáveis do banco de dados</h3>

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=space_flight_news_api
DB_USERNAME=root
DB_PASSWORD=root
```

<h3>Executar os containers</h3>

```
docker-compose up -d
```

<h3>Acessar o container da aplicação</h3>

```
docker-compose exec app bash
```

<h3>Instalar as dependências do projeto</h3>

```
composer install
```

<h3>Gerar a chave do projeto</h3>

```
php artisan key:generate
```

<h3>Executar as migrations</h3>

```
php artisan migrate
```

<h3>Executar as seeders</h3>

```
php artisan db:seed
```

<h3>Projeto disponível através do link:</h3>

```
http://localhost:8989/
```

<h2>💻 Tecnologias utilizadas</h2>
<ul>
    <li><a href="https://laravel.com/">Laravel</a></li>
    <li><a href="https://www.docker.com/">Docker</a></li>
    <li><a href="https://www.mysql.com/">MySQL</a></li>
    <li><a href="https://git-scm.com/">Git</a></li>
</ul>

>  This is a challenge by [Coodesh](https://coodesh.com/)
