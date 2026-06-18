<?php

return [
    'ServicesBundle' => new \Symfony\Component\DependencyInjection\Kernel\ServicesBundle(),
    'ConsoleBundle' => new \Symfony\Component\Console\ConsoleBundle(),
    'FrameworkBundle' => new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
    'DoctrineBundle' => new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
    'DoctrineMigrationsBundle' => new \Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
    'DebugBundle' => new \Symfony\Bundle\DebugBundle\DebugBundle(),
    'TwigBundle' => new \Symfony\Bundle\TwigBundle\TwigBundle(),
    'WebProfilerBundle' => new \Symfony\Bundle\WebProfilerBundle\WebProfilerBundle(),
    'TwigExtraBundle' => new \Twig\Extra\TwigExtraBundle\TwigExtraBundle(),
    'SecurityBundle' => new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
    'MakerBundle' => new \Symfony\Bundle\MakerBundle\MakerBundle(),
    'KnpPaginatorBundle' => new \Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
    'MonologBundle' => new \Symfony\Bundle\MonologBundle\MonologBundle(),
];
