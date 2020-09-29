<?php

namespace HelloWorld\Providers;


use Plenty\Plugin\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider

{

  {
      $this->getApplication()->register(HelloWorldRouteServiceProvider::class);
  }

}
