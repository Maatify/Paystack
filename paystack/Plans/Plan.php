<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 4:34 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Plans;

class Plan
{
    public function CreatePlan(): PlanCreate
    {
        return new PlanCreate();
    }

    public function ListPlans(): PlansList
    {
        return new PlansList();
    }

    public function FetchPlan(int|string $id_or_code)
    {
        return (new PlanFetch())->Execute($id_or_code);
    }

    public function UpdatePlan(): PlanUpdate
    {
        return new PlanUpdate();
    }
}