<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2023-07-24
 * Time: 6:43 PM
 * https://www.Maatify.dev
 */

namespace Maatify\PayStack\Plans;

use Maatify\PayStack\Request;

class PlanFetch extends Request
{
    public function Execute(int|string $id_or_code)
    {
        $this->call_url = $this->api_plan_url . '/' . $id_or_code;
        return $this->CurlGet();
    }
}