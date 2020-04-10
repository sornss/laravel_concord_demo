<?php

namespace Avendor\Demo\Providers;

//use Konekt\Concord\AbstractModuleServiceProvider;
use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{

	protected $models = [
    		\Avendor\Demo\Models\User::class,
  	];

}
