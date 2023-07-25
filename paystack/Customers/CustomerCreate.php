<?php
/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-24 11:50 PM
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

namespace Maatify\PayStack\Customers;

use Maatify\PayStack\ParamsSetter;

class CustomerCreate extends ParamsSetter
{
    /**
     * Body Parameters
     *
     * - email          String      Customer's email address.
     *
     * - first_name     String      Customer's first name.
     *
     * - last_name      String      Customer's last name.
     *
     * - phone          String      Customer's phone number.
     *
     * - metadata       Object      A set of key/value pairs that you can attach to the customer. It can be used to store additional information in a structured format..
     *
     */
    public function Execute(string $email)
    {
        $this->call_url = $this->api_customer_url;
        $this->params['email'] = $email;
        return $this->CurlPost();
    }
}