<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220912205832 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE venta (id INT AUTO_INCREMENT NOT NULL, fecha DATETIME NOT NULL, codigo VARCHAR(255) NOT NULL, valor_venta DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE venta_producto (id INT AUTO_INCREMENT NOT NULL, producto_id INT NOT NULL, venta_id INT NOT NULL, cantidad INT NOT NULL, royaltie DOUBLE PRECISION NOT NULL, INDEX IDX_E054E8B7645698E (producto_id), INDEX IDX_E054E8BF2A5805D (venta_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE venta_producto ADD CONSTRAINT FK_E054E8B7645698E FOREIGN KEY (producto_id) REFERENCES producto (id)');
        $this->addSql('ALTER TABLE venta_producto ADD CONSTRAINT FK_E054E8BF2A5805D FOREIGN KEY (venta_id) REFERENCES venta (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE venta_producto DROP FOREIGN KEY FK_E054E8B7645698E');
        $this->addSql('ALTER TABLE venta_producto DROP FOREIGN KEY FK_E054E8BF2A5805D');
        $this->addSql('DROP TABLE venta');
        $this->addSql('DROP TABLE venta_producto');
    }
}
