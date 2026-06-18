<?php
namespace App\EventSubscriber;

use App\Repository\LivreRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Twig\Environment;

class GlobalVariablesSubscriber implements EventSubscriberInterface
{
    private LivreRepository $livreRepository;
    private Environment $twig;
    private RequestStack $requestStack;


    public function __construct(LivreRepository $livreRepository, Environment $twig, RequestStack $requestStack)
    {
        $this->livreRepository = $livreRepository;
        $this->twig = $twig;
        $this->requestStack = $requestStack;

    }

    public function onKernelController(ControllerEvent $event)
    {
        $livres = $this->livreRepository->findAllASC();
        $this->twig->addGlobal('livres', $livres);

        $request = $this->requestStack->getCurrentRequest();
        $selectedLivreId = $request->cookies->get('selectedLivre', null);
        $this->twig->addGlobal('selectedLivreId', $selectedLivreId);


    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}
