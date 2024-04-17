<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220913150442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE producto CHANGE tipo_producto tipo_producto INT NOT NULL');
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado ADD tipo_pago INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE producto CHANGE tipo_producto tipo_producto VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado DROP tipo_pago');
    }
}
