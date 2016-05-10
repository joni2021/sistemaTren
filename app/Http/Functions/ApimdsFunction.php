<?php
/**
 * Created by PhpStorm.
 * User: framato
 * Date: 25/2/16
 * Time: 12:28 AM
 */

namespace app\Http\Functions;


class ApimdsFunction
{
    protected $apiKey;
    protected $curl;
    protected $header;

    public function __construct()
    {
        $apiKey = env('API_MDS_KEY', '');
        $this->header = [
            //'Content-Type: application/json',
            'X-DreamFactory-Api-Key: ' . $apiKey,
            'Accept: application/json'
        ];
    }

    public function get($url = '', $fields = '')
    {
        $this->_init($url);
        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = $this->_exec();
        $this->_close();

        return $resultado;
    }

    public function post($url = '', $params = [])
    {
        $fields['params'] = $params;

        $this->_init($url);
        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($fields));
        $resultado = $this->_exec();
        $this->_close();

        return $resultado;
    }

    protected function _close()
    {
        curl_close($this->curl);
    }

    protected function _exec()
    {
        return curl_exec($this->curl);
    }

    protected function _init($url)
    {
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->header);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
    }


}