<?php


namespace App\Common\Traits;


use VK\Client\VKApiClient;

trait SocialGroupTrait
{
    /**
     * @return VKApiClient
     */
    public function getVKApi()
    {
        return app()->get(VKApiClient::class);
    }
}
