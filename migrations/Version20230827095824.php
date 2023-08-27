<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230827095824 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE education (id INT AUTO_INCREMENT NOT NULL, diploma VARCHAR(255) NOT NULL, shool VARCHAR(255) NOT NULL, start DATETIME NOT NULL, active TINYINT(1) NOT NULL, end DATETIME DEFAULT NULL, city VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eperiences (id INT AUTO_INCREMENT NOT NULL, job VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, start DATETIME NOT NULL, active TINYINT(1) NOT NULL, end DATETIME DEFAULT NULL, description LONGTEXT DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE portfolio (id INT AUTO_INCREMENT NOT NULL, project VARCHAR(255) NOT NULL, activ TINYINT(1) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, logo VARCHAR(255) NOT NULL, level VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill_portfolio (skill_id INT NOT NULL, portfolio_id INT NOT NULL, INDEX IDX_FA1C2B3F5585C142 (skill_id), INDEX IDX_FA1C2B3FB96B5643 (portfolio_id), PRIMARY KEY(skill_id, portfolio_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill_eperiences (skill_id INT NOT NULL, eperiences_id INT NOT NULL, INDEX IDX_EC553BBA5585C142 (skill_id), INDEX IDX_EC553BBA67A7F9E5 (eperiences_id), PRIMARY KEY(skill_id, eperiences_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill_education (skill_id INT NOT NULL, education_id INT NOT NULL, INDEX IDX_88FB658F5585C142 (skill_id), INDEX IDX_88FB658F2CA1BD71 (education_id), PRIMARY KEY(skill_id, education_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, driver_licence TINYINT(1) NOT NULL, phone VARCHAR(255) NOT NULL, intro LONGTEXT NOT NULL, avatar VARCHAR(255) NOT NULL, address_number VARCHAR(255) NOT NULL, address_street VARCHAR(255) NOT NULL, address_zip VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE skill_portfolio ADD CONSTRAINT FK_FA1C2B3F5585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skill_portfolio ADD CONSTRAINT FK_FA1C2B3FB96B5643 FOREIGN KEY (portfolio_id) REFERENCES portfolio (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skill_eperiences ADD CONSTRAINT FK_EC553BBA5585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skill_eperiences ADD CONSTRAINT FK_EC553BBA67A7F9E5 FOREIGN KEY (eperiences_id) REFERENCES eperiences (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skill_education ADD CONSTRAINT FK_88FB658F5585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skill_education ADD CONSTRAINT FK_88FB658F2CA1BD71 FOREIGN KEY (education_id) REFERENCES education (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE skill_portfolio DROP FOREIGN KEY FK_FA1C2B3F5585C142');
        $this->addSql('ALTER TABLE skill_portfolio DROP FOREIGN KEY FK_FA1C2B3FB96B5643');
        $this->addSql('ALTER TABLE skill_eperiences DROP FOREIGN KEY FK_EC553BBA5585C142');
        $this->addSql('ALTER TABLE skill_eperiences DROP FOREIGN KEY FK_EC553BBA67A7F9E5');
        $this->addSql('ALTER TABLE skill_education DROP FOREIGN KEY FK_88FB658F5585C142');
        $this->addSql('ALTER TABLE skill_education DROP FOREIGN KEY FK_88FB658F2CA1BD71');
        $this->addSql('DROP TABLE education');
        $this->addSql('DROP TABLE eperiences');
        $this->addSql('DROP TABLE portfolio');
        $this->addSql('DROP TABLE skill');
        $this->addSql('DROP TABLE skill_portfolio');
        $this->addSql('DROP TABLE skill_eperiences');
        $this->addSql('DROP TABLE skill_education');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
