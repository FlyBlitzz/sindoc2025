<?php
namespace App\Service;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class BreadCrumbService
{
    private array $breadcrumbs = [];

    public function addBreadcrumb(string $label, string $route = null, array $routeParams = []): self
    {
        $this->breadcrumbs[] = [
            'label' => $label,
            'route' => $route,
            'routeParams' => $routeParams,
        ];

        return $this;
    }

    public function getBreadcrumbs(): array
    {
        return $this->breadcrumbs;
    }
}