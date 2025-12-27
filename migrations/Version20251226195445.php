<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251226195445 extends AbstractMigration
{

    public function getDescription(): string
    {
        return 'Criar tabelas usuarios e messenger_messages';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql($this->usuario());
        $this->addSql($this->messengerMessages());
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('DROP TABLE usuario');
    }

    private function usuario(): string
    {
        return "CREATE TABLE `usuario` (
                    `id` INT NOT NULL AUTO_INCREMENT,
                    `uuid` BINARY(16) NOT NULL,
                    `email` VARCHAR(180) NULL,
                    `roles` LONGTEXT NOT NULL DEFAULT '[\"ROLE_USER\"]',
                    `password` VARCHAR(255) NOT NULL,
                    `is_verified` TINYINT NOT NULL DEFAULT 0,
                    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP NULL DEFAULT NULL,
                    PRIMARY KEY (`id`),
                    UNIQUE INDEX `email_UNIQUE` (`email` ASC))
                  ENGINE = InnoDB"
        ;
    }

    private function messengerMessages(): string
    {
        return "CREATE TABLE `messenger_messages` (
                    `id` BIGINT NOT NULL AUTO_INCREMENT,
                    `body` LONGTEXT NOT NULL,
                    `headers` LONGTEXT NOT NULL,
                    `queue_name` VARCHAR(190) NOT NULL,
                    `created_at` DATETIME NOT NULL,
                    `available_at` DATETIME NOT NULL,
                    `delivered_at` DATETIME NULL DEFAULT NULL,
                    PRIMARY KEY (`id`),
                    INDEX `queue_name_INDEX` (`queue_name` ASC),
                    INDEX `available_at_INDEX` (`available_at` ASC),
                    INDEX `delivered_at_INDEX` (`delivered_at` ASC))
                  ENGINE = InnoDB"
        ;
    }
}
