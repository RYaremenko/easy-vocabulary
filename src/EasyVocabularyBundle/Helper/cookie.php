<?php

if (!function_exists('cookie')) {
    /**
     * @param string $name
     * @param string $value
     * @param DateTime $expire
     */
    function cookie(string $name, string $value, \DateTime $expire)
    {
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->setCookie(new \Symfony\Component\HttpFoundation\Cookie($name, $value, $expire));
        $response->sendHeaders();
    }
}

if (!function_exists('getCookie')) {
    /**
     * @param string $name
     * @return mixed
     */
    function getCookie(string $name)
    {
        global $kernel;
        return $kernel->getContainer()->get('request_stack')->getCurrentRequest()->cookies->get($name);
    }
}
