<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CompanyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
#[ApiResource]
class Company
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $NIP = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $postcode = null;

    #[ORM\OneToMany(mappedBy: 'company_id', targetEntity: CompanyEmployee::class, orphanRemoval: true)]
    private Collection $companyEmployees;

    public function __construct()
    {
        $this->companyEmployees = new ArrayCollection();
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

    public function getNIP(): ?string
    {
        return $this->NIP;
    }

    public function setNIP(string $NIP): static
    {
        $this->NIP = $NIP;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(string $postcode): static
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * @return Collection<int, CompanyEmployee>
     */
    public function getCompanyEmployees(): Collection
    {
        return $this->companyEmployees;
    }

    public function addCompanyEmployee(CompanyEmployee $companyEmployee): static
    {
        if (!$this->companyEmployees->contains($companyEmployee)) {
            $this->companyEmployees->add($companyEmployee);
            $companyEmployee->setCompanyId($this);
        }

        return $this;
    }

    public function removeCompanyEmployee(CompanyEmployee $companyEmployee): static
    {
        if ($this->companyEmployees->removeElement($companyEmployee)) {
            // set the owning side to null (unless already changed)
            if ($companyEmployee->getCompanyId() === $this) {
                $companyEmployee->setCompanyId(null);
            }
        }

        return $this;
    }
}
