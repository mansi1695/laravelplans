<?php

namespace Concept\LaravelPlans\Contracts;

interface PlanInterface
{
    public function features();
    public function subscriptions();
    public function isFree();
    public function hasTrial();
}
