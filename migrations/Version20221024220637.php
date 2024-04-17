<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221024220637 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bizum DROP FOREIGN KEY FK_5BD316694B1B945C');
        $this->addSql('DROP INDEX UNIQ_5BD316694B1B945C ON bizum');
        $this->addSql('ALTER TABLE bizum CHANGE telefono telefono VARCHAR(180) NOT NULL, CHANGE usuarioid_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bizum ADD CONSTRAINT FK_5BD31669A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_5BD31669A76ED395 ON bizum (user_id)');
        $this->addSql('ALTER TABLE paypal DROP FOREIGN KEY FK_6496024C4B1B945C');
        $this->addSql('DROP INDEX UNIQ_6496024C4B1B945C ON paypal');
        $this->addSql('ALTER TABLE paypal ADD email VARCHAR(180) NOT NULL, DROP numerocuenta, CHANGE usuarioid_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE paypal ADD CONSTRAINT FK_6496024CA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_6496024CA76ED395 ON paypal (user_id)');
        $this->addSql('ALTER TABLE transferencia_bancaria DROP FOREIGN KEY FK_6E3E99324B1B945C');
        $this->addSql('DROP INDEX UNIQ_6E3E99324B1B945C ON transferencia_bancaria');
        $this->addSql('ALTER TABLE transferencia_bancaria DROP nombrebanco, DROP nombretitular, CHANGE usuarioid_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE transferencia_bancaria ADD CONSTRAINT FK_6E3E9932A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_6E3E9932A76ED395 ON transferencia_bancaria (user_id)');
        $this->addSql('ALTER TABLE westerunion DROP FOREIGN KEY FK_10A2B24D4B1B945C');
        $this->addSql('DROP INDEX UNIQ_10A2B24D4B1B945C ON westerunion');
        $this->addSql('ALTER TABLE westerunion ADD primer_apellido VARCHAR(255) NOT NULL, ADD segundo_apellido VARCHAR(255) DEFAULT NULL, ADD email VARCHAR(255) NOT NULL, DROP apellido_paterno, DROP apellido_materno, DROP correo, CHANGE nombre nombre VARCHAR(255) NOT NULL, CHANGE numeromovil numeromovil INT NOT NULL, CHANGE usuarioid_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE westerunion ADD CONSTRAINT FK_10A2B24DA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_10A2B24DA76ED395 ON westerunion (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bizum DROP FOREIGN KEY FK_5BD31669A76ED395');
        $this->addSql('DROP INDEX IDX_5BD31669A76ED395 ON bizum');
        $this->addSql('ALTER TABLE bizum CHANGE telefono telefono INT DEFAULT NULL, CHANGE user_id usuarioid_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bizum ADD CONSTRAINT FK_5BD316694B1B945C FOREIGN KEY (usuarioid_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5BD316694B1B945C ON bizum (usuarioid_id)');
        $this->addSql('ALTER TABLE paypal DROP FOREIGN KEY FK_6496024CA76ED395');
        $this->addSql('DROP INDEX IDX_6496024CA76ED395 ON paypal');
        $this->addSql('ALTER TABLE paypal ADD numerocuenta VARCHAR(255) DEFAULT NULL, DROP email, CHANGE user_id usuarioid_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE paypal ADD CONSTRAINT FK_6496024C4B1B945C FOREIGN KEY (usuarioid_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6496024C4B1B945C ON paypal (usuarioid_id)');
        $this->addSql('ALTER TABLE transferencia_bancaria DROP FOREIGN KEY FK_6E3E9932A76ED395');
        $this->addSql('DROP INDEX IDX_6E3E9932A76ED395 ON transferencia_bancaria');
        $this->addSql('ALTER TABLE transferencia_bancaria ADD nombrebanco VARCHAR(255) DEFAULT NULL, ADD nombretitular VARCHAR(255) DEFAULT NULL, CHANGE user_id usuarioid_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE transferencia_bancaria ADD CONSTRAINT FK_6E3E99324B1B945C FOREIGN KEY (usuarioid_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6E3E99324B1B945C ON transferencia_bancaria (usuarioid_id)');
        $this->addSql('ALTER TABLE westerunion DROP FOREIGN KEY FK_10A2B24DA76ED395');
        $this->addSql('DROP INDEX IDX_10A2B24DA76ED395 ON westerunion');
        $this->addSql('ALTER TABLE westerunion ADD apellido_materno VARCHAR(255) DEFAULT NULL, ADD correo VARCHAR(255) DEFAULT NULL, DROP primer_apellido, DROP email, CHANGE nombre nombre VARCHAR(255) DEFAULT NULL, CHANGE numeromovil numeromovil INT DEFAULT NULL, CHANGE user_id usuarioid_id INT DEFAULT NULL, CHANGE segundo_apellido apellido_paterno VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE westerunion ADD CONSTRAINT FK_10A2B24D4B1B945C FOREIGN KEY (usuarioid_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_10A2B24D4B1B945C ON westerunion (usuarioid_id)');
    }
}
