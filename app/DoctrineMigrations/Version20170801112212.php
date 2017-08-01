<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170801112212 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(255) NOT NULL, Descriptions LONGTEXT NOT NULL, gitUrl VARCHAR(255) NOT NULL, created DATETIME NOT NULL, finished VARCHAR(255) NOT NULL, updated DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE api (id INT AUTO_INCREMENT NOT NULL, project_id INT DEFAULT NULL, endpointName VARCHAR(255) NOT NULL, endpointUrl VARCHAR(255) NOT NULL, endpointMethod VARCHAR(255) NOT NULL, request LONGTEXT NOT NULL, response LONGTEXT NOT NULL, note LONGTEXT NOT NULL, created DATETIME NOT NULL, updated DATETIME NOT NULL, INDEX IDX_AD05D80F166D1F9C (project_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE api ADD CONSTRAINT FK_AD05D80F166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE api DROP FOREIGN KEY FK_AD05D80F166D1F9C');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE api');
    }
}
