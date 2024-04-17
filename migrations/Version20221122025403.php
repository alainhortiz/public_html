<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221122025403 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE venta_cancelada (id INT AUTO_INCREMENT NOT NULL, producto_id INT NOT NULL, fecha DATETIME NOT NULL, codigo VARCHAR(255) NOT NULL, royaltie NUMERIC(18, 2) NOT NULL, saldo_afectado VARCHAR(255) NOT NULL, INDEX IDX_8F42AD517645698E (producto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE venta_cancelada ADD CONSTRAINT FK_8F42AD517645698E FOREIGN KEY (producto_id) REFERENCES producto (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE venta_cancelada DROP FOREIGN KEY FK_8F42AD517645698E');
        $this->addSql('DROP TABLE venta_cancelada');
    }
}
