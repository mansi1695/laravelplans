Events
======

The following are the events fired by the package:

- ``Concept\LaravelPlans\Events\SubscriptionCreated``: Fired when a subscription is created.
- ``Concept\LaravelPlans\Events\SubscriptionRenewed``: Fired when a subscription is renewed using the ``renew()`` method.
- ``Concept\LaravelPlans\Events\SubscriptionCanceled``: Fired when a subscription is canceled using the ``cancel()`` method.
- ``Concept\LaravelPlans\Events\SubscriptionPlanChanged``: Fired when a subscription's plan is changed; it will be fired once the ``PlanSubscription`` model is saved. Plan change is determined by comparing the original and current value of ``plan_id``.