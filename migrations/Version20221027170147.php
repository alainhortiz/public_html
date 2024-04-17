<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221027170147 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE solicitar_recogida DROP FOREIGN KEY FK_B30C14F57645698E');
        $this->addSql('DROP INDEX IDX_B30C14F57645698E ON solicitar_recogida');
        $this->addSql('ALTER TABLE solicitar_recogida ADD indicador_solicitud VARCHAR(255) NOT NULL, ADD link_recogida VARCHAR(255) DEFAULT NULL, ADD observacion_recogida VARCHAR(255) DEFAULT NULL, DROP producto_id, DROP empresa, DROP numeroenvio, DROP cantidad');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE solicitar_recogida ADD producto_id INT NOT NULL, ADD empresa VARCHAR(255) DEFAULT NULL, ADD numeroenvio VARCHAR(255) DEFAULT NULL, ADD cantidad INT NOT NULL, DROP indicador_solicitud, DROP link_recogida, DROP observacion_recogida');
        $this->addSql('ALTER TABLE solicitar_recogida ADD CONSTRAINT FK_B30C14F57645698E FOREIGN KEY (producto_id) REFERENCES producto (id)');
        $this->addSql('CREATE INDEX IDX_B30C14F57645698E ON solicitar_recogida (producto_id)');
    }
}
