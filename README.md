# Mega Fácil
Projeto de estudo Symfony 8

# Symfony
## Criar um novo projeto
```bash
composer create-project symfony/skeleton:"8.0.*" my_project_directory
cd my_project_directory
composer require webapp
php bin/console about
```

## NPM
```bash
npm init -y
npm install bootstrap
npm install gasparesganga-jquery-loading-overlay
```

## Loading
https://loading.io/icon/?kw=luck

## AssetMapper
```bash
php bin/console asset-map:compile
```

## Icones
```bash
composer require symfony/ux-icons
```

## Publicar em produção
```bash
npm update
composer install --no-dev --optimize-autoloader
php bin/console importmap:install
php bin/console asset-map:compile
php bin/console cache:clear --env=prod
```
