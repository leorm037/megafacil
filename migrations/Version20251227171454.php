<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251227171454 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Adicionar o campo nome na tabela usuario';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE `usuario` ADD `nome` VARCHAR(60) NOT NULL AFTER `uuid`;');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE `usuario` DROP `nome`;');

    }
}
