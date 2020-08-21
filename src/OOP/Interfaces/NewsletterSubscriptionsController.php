<?php

namespace App\OOP\Interfaces;

interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    private $api;

    public function __construct($api)
    {
        $this->api = $api;
    }

    public function subscribe($email)
    {
        //do the request adn use the api.
        die('subscribing with CampaignMonitor');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        //do the request adn use the api.
        die('subscribing with Drip');
    }
}

class NewsletterSubscriptionsController
{
    //1. dynamic way: just pass $newsletter it's called duck typing
    //2. Interface way: pass Newsletter interface as the type
    public function store(Newsletter $newsletter)
    {
        $email = 'andylauszp@gmail.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionsController();

$controller->store(new Drip());
$controller->store(new CampaignMonitor('api'));
