# SMART-ADV


Algumas pastas estão ignoradas pelo .gitignore.

Levando em consideração que você tenha o <code> php </code> e <code> composer </code> na sua variável global PATH, para uma nova instalação do Laravel.


# Clonando o projeto 

Vou  considerar que você esteja rodando um sistema operacional Linux/Windows e com o git instalado, faça o seguinte:

<strong> Clone o projeto</strong> <br>
<code>  git clone https://github.com/tmsbrasil/smart-adv.git </code> 
<br>

<strong> Instale as dependências e o framework</strong>
<br>
<code>
composer install --no-scripts
</code>

<strong>Copie o arquivo .env.example</strong>
<br>
<code> cp .env.example .env </code>

<strong> Crie uma nova chave para a aplicação</strong>
<br>
<br>
Em seguida você deve configurar o arquivo .env (não esqueça de criar um banco de dados local) e rodar as migrations com:
<br>

<code>php artisan key:generate</code>

<code> php artisan migrate --seed </code> 

<strong> Servidor de Desenvolvimento Local</strong>

Se você tem o PHP instalado localmente e gostaria de usar o servidor de desenvolvimento interno do PHP para servir o seu aplicativo, você pode usar o comando <strong>serve</strong>. Este comando irá iniciar um servidor de desenvolvimento em  <strong> http: // localhost: 8000 </strong>:
<br>

<code> php artisan serve</code> 