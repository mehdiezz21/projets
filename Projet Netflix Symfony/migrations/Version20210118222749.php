<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210118222749 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C794BBE89');
        $this->addSql('DROP INDEX IDX_9474526C794BBE89 ON comment');
        $this->addSql('ALTER TABLE comment ADD anime VARCHAR(255) NOT NULL, DROP anime_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment ADD anime_id INT NOT NULL, DROP anime');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C794BBE89 FOREIGN KEY (anime_id) REFERENCES anime (id)');
        $this->addSql('CREATE INDEX IDX_9474526C794BBE89 ON comment (anime_id)');
    }
}
