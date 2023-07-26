<?php

namespace App\Service;

interface ApiServiceInterface
{
    public function addCompany();

    public function addCompanyEmployee();

    public function getCompany();

    public function getCompanyEmployee();

    public function editCompany();

    public function editCompanyEmployee();

    public function deleteCompany();

    public function deleteCompanyEmployee();

}
