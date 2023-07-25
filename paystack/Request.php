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

use CurlHandle;
use Maatify\Logger\Logger;

class Request
{
    private static string $secret_key;
    protected string $public_key = 'pk_test_af987eb5c9e73e46beed4e3086d4ce40a12e3548';
    private string $api_main_url = 'https://api.paystack.co/';
    protected string $api_transaction_url = 'https://api.paystack.co/transaction';
    protected string $api_plan_url = 'https://api.paystack.co/plan';
    protected string $api_subscription_url = 'https://api.paystack.co/subscription';
    protected string $api_customer_url = 'https://api.paystack.co/customer';

    protected string $call_url;
    private false|CurlHandle $ch;
    protected array $params = [];

    protected function SetSecretKey(string $secret_key): void
    {
        static::$secret_key = $secret_key;
    }

    public function __construct()
    {
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 120);
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($this->ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    }

    protected function CurlPost()
    {
        curl_setopt($this->ch, CURLOPT_POST, 1);
        return $this->PostOrPutRequest();
    }

    protected function CurlPut()
    {
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "PUT");
        return $this->PostOrPutRequest();
    }

    private function PostOrPutRequest(){
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($this->params));
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . static::$secret_key,
            'Cache-Control: no-cache',
            'Content-Type: application/json',
        ));
        return $this->Call();
    }

    protected function CurlGet()
    {
        $this->call_url = $this->call_url . (!empty($this->params) ? '?' . http_build_query($this->params) : '');
        curl_setopt($this->ch, CURLOPT_POST, 0);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . static::$secret_key,
            'Cache-Control: no-cache',
            'Content-Type: application/json',
        ));
        return $this->Call();
    }

    private function Call(){
        curl_setopt($this->ch, CURLOPT_URL, $this->call_url);

        $result = curl_exec($this->ch);
        $httpCode = curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
        $curl_errno = curl_errno($this->ch);
        $curl_error = curl_error($this->ch);
        curl_close($this->ch);
        if ($curl_errno > 0) {
            Logger::RecordLog([
                'error' => "(err-" . __METHOD__ . ") cURL Error ($curl_errno): $curl_error",
                'params' => $this->params,
                'url' => $this->call_url
            ], 'pay_stack_failed');
        } else {
            if ($resultArray = json_decode($result, true)) {
                Logger::RecordLog([
                    'success' => $resultArray,
                    'params' => $this->params,
                    'url' => $this->call_url
                ], 'pay_stack_success');
                return $resultArray;
            } else {
                Logger::RecordLog([
                    'error' => ($httpCode != 200) ? "Error header response " . $httpCode : "There is no response from server (err-" . __METHOD__ . ")",
                    'params' => $this->params,
                    'url' => $this->call_url
                ], 'pay_stack_failed');
            }
        }
        return [];
    }
}