<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221022035023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE retiro_saldo ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE retiro_saldo ADD CONSTRAINT FK_53AF0BF7A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_53AF0BF7A76ED395 ON retiro_saldo (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE retiro_saldo DROP FOREIGN KEY FK_53AF0BF7A76ED395');
        $this->addSql('DROP INDEX IDX_53AF0BF7A76ED395 ON retiro_saldo');
        $this->addSql('ALTER TABLE retiro_saldo DROP user_id');
    }
}
