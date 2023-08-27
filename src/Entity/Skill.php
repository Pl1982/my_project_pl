<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?bool $active = null;

    #[ORM\Column(length: 255)]
    private ?string $logo = null;

    #[ORM\Column(length: 255)]
    private ?string $level = null;

    #[ORM\ManyToMany(targetEntity: portfolio::class, inversedBy: 'skills')]
    private Collection $skill_portfolio;

    #[ORM\ManyToMany(targetEntity: Eperiences::class, inversedBy: 'skills')]
    private Collection $skill_experience;

    #[ORM\ManyToMany(targetEntity: Education::class, inversedBy: 'skills')]
    private Collection $skill_education;

    public function __construct()
    {
        $this->skill_portfolio = new ArrayCollection();
        $this->skill_experience = new ArrayCollection();
        $this->skill_education = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): static
    {
        $this->active = $active;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(string $level): static
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return Collection<int, portfolio>
     */
    public function getSkillPortfolio(): Collection
    {
        return $this->skill_portfolio;
    }

    public function addSkillPortfolio(portfolio $skillPortfolio): static
    {
        if (!$this->skill_portfolio->contains($skillPortfolio)) {
            $this->skill_portfolio->add($skillPortfolio);
        }

        return $this;
    }

    public function removeSkillPortfolio(portfolio $skillPortfolio): static
    {
        $this->skill_portfolio->removeElement($skillPortfolio);

        return $this;
    }

    /**
     * @return Collection<int, Eperiences>
     */
    public function getSkillExperience(): Collection
    {
        return $this->skill_experience;
    }

    public function addSkillExperience(Eperiences $skillExperience): static
    {
        if (!$this->skill_experience->contains($skillExperience)) {
            $this->skill_experience->add($skillExperience);
        }

        return $this;
    }

    public function removeSkillExperience(Eperiences $skillExperience): static
    {
        $this->skill_experience->removeElement($skillExperience);

        return $this;
    }

    /**
     * @return Collection<int, Education>
     */
    public function getSkillEducation(): Collection
    {
        return $this->skill_education;
    }

    public function addSkillEducation(Education $skillEducation): static
    {
        if (!$this->skill_education->contains($skillEducation)) {
            $this->skill_education->add($skillEducation);
        }

        return $this;
    }

    public function removeSkillEducation(Education $skillEducation): static
    {
        $this->skill_education->removeElement($skillEducation);

        return $this;
    }
}
