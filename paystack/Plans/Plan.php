<?php

/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-24 4:34 PM
 * @see         https://www.maatify.dev Maatify.com
 * @link        https://github.com/Maatify/PayStack  view project on GitHub
 * @link        https://github.com/Maatify/Logger (maatify/logger)
 * @copyright   ©2023 Maatify.dev
 * @note        This Project using for PayStack API.
 * @note        This Project extends other libraries maatify/logger.
 *
 * @note        This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 *
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