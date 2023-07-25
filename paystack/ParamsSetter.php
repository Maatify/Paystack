<?php
/**
 * @copyright   ©2023 Maatify.dev
 * @Liberary    PayStack
 * @Project     PayStack
 * @author      Mohamed Abdulalim (megyptm) <mohamed@maatify.dev>
 * @since       2023-07-22 2:23 AM
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

namespace Maatify\PayStack;

abstract class ParamsSetter extends Request
{
    protected array $params = [];

    public function SetOptional(string $key, mixed $value): static
    {
        $this->params[$key] = $value;
        return $this;
    }

    public function SetAllOptionalAsArray(array $params): static
    {
        if(!empty($params)){
            foreach ($params as $key => $value){
                $this->params[$key] = $value;
            }
        }
        return $this;
    }
}