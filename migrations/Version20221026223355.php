<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221026223355 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado ADD westerunion_id INT DEFAULT NULL, ADD paypal_id INT DEFAULT NULL, ADD transferencia_bancaria_id INT DEFAULT NULL, ADD bizum_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado ADD CONSTRAINT FK_28858948F028D54D FOREIGN KEY (westerunion_id) REFERENCES westerunion (id)');
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado ADD CONSTRAINT FK_28858948349BE503 FOREIGN KEY (paypal_id) REFERENCES paypal (id)');
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado ADD CONSTRAINT FK_28858948204CD858 FOREIGN KEY (transferencia_bancaria_id) REFERENCES transferencia_bancaria (id)');
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado ADD CONSTRAINT FK_288589482205037D FOREIGN KEY (bizum_id) REFERENCES bizum (id)');
        $this->addSql('CREATE INDEX IDX_28858948F028D54D ON solicitar_pago_royal_acumulado (westerunion_id)');
        $this->addSql('CREATE INDEX IDX_28858948349BE503 ON solicitar_pago_royal_acumulado (paypal_id)');
        $this->addSql('CREATE INDEX IDX_28858948204CD858 ON solicitar_pago_royal_acumulado (transferencia_bancaria_id)');
        $this->addSql('CREATE INDEX IDX_288589482205037D ON solicitar_pago_royal_acumulado (bizum_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado DROP FOREIGN KEY FK_28858948F028D54D');
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado DROP FOREIGN KEY FK_28858948349BE503');
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado DROP FOREIGN KEY FK_28858948204CD858');
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado DROP FOREIGN KEY FK_288589482205037D');
        $this->addSql('DROP INDEX IDX_28858948F028D54D ON solicitar_pago_royal_acumulado');
        $this->addSql('DROP INDEX IDX_28858948349BE503 ON solicitar_pago_royal_acumulado');
        $this->addSql('DROP INDEX IDX_28858948204CD858 ON solicitar_pago_royal_acumulado');
        $this->addSql('DROP INDEX IDX_288589482205037D ON solicitar_pago_royal_acumulado');
        $this->addSql('ALTER TABLE solicitar_pago_royal_acumulado DROP westerunion_id, DROP paypal_id, DROP transferencia_bancaria_id, DROP bizum_id');
    }
}
