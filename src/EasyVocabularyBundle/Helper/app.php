<?php

if (!function_exists('app')) {
    /**
     * @param string $service
     * @return object
     */
    function app(string $service)
    {
        global $kernel;
        return $kernel->getContainer()->get($service);
    }
}

if (!function_exists('session')) {
    /**
     * @param string $name
     * @return mixed|\Symfony\Component\HttpFoundation\Session\Session
     */
    function session(string $name = '')
    {
        global $kernel;
        /** @var $session \Symfony\Component\HttpFoundation\Session\Session */
        $session = $kernel->getContainer()->get('session');
        if (!empty($name)) {
            return $session->get($name);
        }

        return $session;
    }
}

if (!function_exists('dd')) {
    /**
     * @param $subject
     */
    function dd($subject)
    {
        dump($subject);
        die;
    }
}

if (!function_exists('getProjectDir')) {
    /**
     * @return string
     */
    function getProjectDir(): string
    {
        global $kernel;
        return $kernel->getContainer()->get('kernel')->getProjectDir();
    }
}

if (!function_exists('getLogDir')) {
    /**
     * @return string
     */
    function getLogDir(): string
    {
        global $kernel;
        return $kernel->getContainer()->get('kernel')->getLogDir();
    }
}

if (!function_exists('generateUrl')) {
    /**
     * @param string $route
     * @param array $params
     * @return string
     */
    function generateUrl(string $route, array $params = []): string
    {
        global $kernel;
        return $kernel->getContainer()->get('router')->generate($route, $params,
            \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL);
    }
}
