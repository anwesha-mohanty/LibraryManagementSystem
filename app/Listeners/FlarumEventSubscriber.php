<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class FlarumEventSubscriber implements ShouldQueue
{
    private $api_url;
    private $api_key;
    private $root;
    private $password_token;
    private const REMEMBER_ME_KEY = 'flarum_remember';
    private const SESSION_KEY = 'flarum_session';
    private const LIFETIME_IN_SECONDS = 99999999;

    public $queue = 'flarum';

    public function __construct()
    {
        $this->api_url = config('flarum.url');
        $this->api_key = config('flarum.api_key');
        $this->root = config('flarum.root');
    }

    public function onUserRegistration($event)
    {
        $user = $event->user;
    $method = 'POST';
    $endpoint = '/api/users';

    $data = [
      'data' => [
          'attributes' => [
              'id'       => $user->id,
              'username' => $user->name,
              'password' => $user->password,
              'email'    => $user->email
          ]
      ]
  ];

  $this->sendRequest($endpoint, $method, $data);
}

private function sendRequest($endpoint, $method, $data)
{
    $data_string = json_encode($data);
    $ch = curl_init($this->api_url . $endpoint);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
      $ch,
      CURLOPT_HTTPHEADER,
      [
          'Content-Type: application/json',
          'Content-Length: ' . strlen($data_string),
          'Authorization: Token ' . $this->api_key . '; userId=1',
      ]
    );
    $result = curl_exec($ch);
    return json_decode($result, true);
}

public function onUserLogin($event)
{
    $user = $event->user;
    $response = $this->authenticate($user->name, $user->password);
    $token = $response['token'] ?: '';
    $this->setRememberMeCookie($token);
}

private function authenticate($id, $password)
{
    $endpoint = '/api/token';
    $method = 'POST';

    $data = [
        'identification' => $id,
        'password' => $password,
        'lifetime' => self::LIFETIME_IN_SECONDS
    ];

    return $this->sendRequest($endpoint, $method, $data);
}

private function setRememberMeCookie($token)
{
    $this->setCookie(self::REMEMBER_ME_KEY, $token, time() + self::LIFETIME_IN_SECONDS);
}

private function removeRememberMeCookie()
{
    $this->setCookie(self::REMEMBER_ME_KEY, '', time() - 10);
}

private function setCookie($key, $token, $time, $path = '/')
{
    setcookie($key, $token, $time, $path, $this->root);
}

public function onUserLogout($event)
{
    $this->removeRememberMeCookie();
    $this->setCookie('flarum_session', '', time() - 10);
    $this->setCookie('flarum_session', '', time() - 10, '/flarum');
}

public function subscribe($events)
{
        $events->listen(
            'Illuminate\Auth\Events\Registered',
            'App\Listeners\FlarumEventSubscriber@onUserRegistration'
        );

        $events->listen(
            'Illuminate\Auth\Events\Login',
            'App\Listeners\FlarumEventSubscriber@onUserLogin'
        );

        $events->listen(
            'Illuminate\Auth\Events\Logout',
            'App\Listeners\FlarumEventSubscriber@onUserLogout'
        );
    }
}
