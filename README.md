# Mega Fácil
Projeto de estudo Symfony 8


# Ambiente de desenvolvimento

## 🐧 Linux
```bash
sudo apt update
sudo apt install -y php8.4-cli php8.4-zip php8.4-redis php8.4-xml php8.4-curl php8.4-pdo
```

### 🎼 Composer
https://getcomposer.org/download/

### Node
https://nodejs.org/pt-br/download


# 🎼 Symfony
## Criar um novo projeto
```bash
composer create-project symfony/skeleton:"8.0.*" my_project_directory
cd my_project_directory
composer require webapp
php bin/console about
```

## Node
```bash
npm init -y
npm install bootstrap
npm install gasparesganga-jquery-loading-overlay
```

## ⌛️ Loading
https://loading.io/icon/?kw=luck

## AssetMapper
```bash
php bin/console asset-map:compile
```

## 😀 Icones
```bash
composer require symfony/ux-icons
```

## 📦️ Publicar em produção
```bash
npm update
composer install --no-dev --optimize-autoloader
php bin/console importmap:install
php bin/console asset-map:compile
php bin/console cache:clear --env=prod
```
