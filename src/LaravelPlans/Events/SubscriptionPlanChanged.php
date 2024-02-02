<?php

namespace Concept\LaravelPlans\Events;

use Concept\LaravelPlans\Models\PlanSubscription;
use Illuminate\Queue\SerializesModels;

class SubscriptionPlanChanged
{
    use SerializesModels;

    /**
     * @var \Concept\LaravelPlans\Models\PlanSubscription
     */
    public $subscription;

    /**
     * Create a new event instance.
     *
     * @param  \Concept\LaravelPlans\Models\PlanSubscription  $subscription
     * @return void
     */
    public function __construct(PlanSubscription $subscription)
    {
        $this->subscription = $subscription;
    }
}
