<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column]
    private ?bool $driver_licence = null;

    #[ORM\Column(length: 255)]
    private ?string $phone = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $intro = null;

    #[ORM\Column(length: 255)]
    private ?string $avatar = null;

    #[ORM\Column(length: 255)]
    private ?string $address_number = null;

    #[ORM\Column(length: 255)]
    private ?string $address_street = null;

    #[ORM\Column(length: 255)]
    private ?string $address_zip = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function isDriverLicence(): ?bool
    {
        return $this->driver_licence;
    }

    public function setDriverLicence(bool $driver_licence): static
    {
        $this->driver_licence = $driver_licence;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getIntro(): ?string
    {
        return $this->intro;
    }

    public function setIntro(string $intro): static
    {
        $this->intro = $intro;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): static
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getAddressaddressnumber(): ?string
    {
        return $this->address_number;
    }

    public function setAddressnumber(string $address): static
    {
        $this->address_number  = $address;

        return $this;
    }

    public function getAddressStreet(): ?string
    {
        return $this->address_street;
    }

    public function setAddressStreet(string $address_street): static
    {
        $this->address_street = $address_street;

        return $this;
    }

    public function getAddressZip(): ?string
    {
        return $this->address_zip;
    }

    public function setAddressZip(string $address_zip): static
    {
        $this->address_zip = $address_zip;

        return $this;
    }
}
