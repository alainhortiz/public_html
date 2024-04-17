<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221024042830 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE notificacion ADD retiro_saldo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE notificacion ADD CONSTRAINT FK_729A19EC7357C784 FOREIGN KEY (retiro_saldo_id) REFERENCES retiro_saldo (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_729A19EC7357C784 ON notificacion (retiro_saldo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE notificacion DROP FOREIGN KEY FK_729A19EC7357C784');
        $this->addSql('DROP INDEX UNIQ_729A19EC7357C784 ON notificacion');
        $this->addSql('ALTER TABLE notificacion DROP retiro_saldo_id');
    }
}
