<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new MyApp\UserBundle\MyAppUserBundle(),
            new MyApp\VideoBundle\MyAppVideoBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Esprit\GameBundle\EspritGameBundle(),
            new MyApp\FourumBundle\MyAppFourumBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Nomaya\SocialBundle\NomayaSocialBundle(),
            new blackknight467\StarRatingBundle\StarRatingBundle(),
            new Ob\HighchartsBundle\ObHighchartsBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new FOS\CommentBundle\FOSCommentBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle($this),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            new FOS\MessageBundle\FOSMessageBundle(),
            new MyApp\PIBundle\MyAppPIBundle(),
            new Ensepar\Html2pdfBundle\EnseparHtml2pdfBundle(),
            new Liip\ImagineBundle\LiipImagineBundle(),
            new TGSBundle\TGSBundle(),
            ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}