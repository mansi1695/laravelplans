Installation
============

Composer
--------


.. code-block:: bash

    composer require czechbox/laravelplans


Service Provider
----------------

This used to be manually added, however, given this package is not targeted at older versions, that's no longer the cas. We use autodiscovery specified in the package ``composer.json`` file.



Config File and Migrations
--------------------------

Publish package config file and migrations with the following command:

.. code-block:: bash

    php artisan vendor:publish --provider="Concept\LaravelPlans\LaravelPlansServiceProvider"


Depending on your use case, you may want to adjust the published migrations. If your User model id is a 'uuid' rather than 'increments', modify the ``plan_subscriptions`` schema in  ``XXXX_XX-XX_XXXXXX_create_laravelplans_tables.php`` file as below.

.. code-block:: php

    Schema::create('plan_subscriptions', function (Blueprint $table) {

            $table->increments('id');

            $table->uuidMorphs('suscribable');


Then run migrations:

.. code-block:: bash

    php artisan migrate

Traits and Contracts
--------------------

Add ``Concept\LaravelPlans\Traits\PlanSubscriber`` trait and ``Concept\LaravelPlans\Contracts\PlanSubscriberInterface`` contract to your ``User`` model.

See the following example:

.. code-block:: php

    namespace App\Models;

    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Concept\LaravelPlans\Contracts\PlanSubscriberInterface;
    use Concept\LaravelPlans\Traits\PlanSubscriber;

    class User extends Authenticatable implements PlanSubscriberInterface
    {
        use PlanSubscriber;
