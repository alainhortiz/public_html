<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220913194224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE notificacion ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE notificacion ADD CONSTRAINT FK_729A19ECA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_729A19ECA76ED395 ON notificacion (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE notificacion DROP FOREIGN KEY FK_729A19ECA76ED395');
        $this->addSql('DROP INDEX IDX_729A19ECA76ED395 ON notificacion');
        $this->addSql('ALTER TABLE notificacion DROP user_id');
    }
}
