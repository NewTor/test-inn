<?php
require __DIR__ . '/input.php';
/**
 * Основной класс приложения
 */
class Authenticity
{
    /**
     * Массив конфиг
     * @var array $conf
     */
    public $conf;
    /**
     * Объект для входящих данных
     * @var $input
     */
    private  $input;
    /**
     * Конструктор класса
     * @param  array $conf
     * @return void
     */
    public function __construct($conf)
    {
        $this->conf = $conf;
        $this->input = new Input();
    }
    /**
     * Возвращает результат запроса
     * @return array
     */
    public function get()
    {
        $query = $this->input->post('inn', true);
        if($curl = curl_init()) {
            $data = json_encode(array('query' => $query));
            curl_setopt($curl, CURLOPT_URL, $this->conf['remote_search']['url']);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json',]);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 60);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            $out = curl_exec($curl);
            curl_close($curl);
            $out = json_decode($out);
            return $out;
        } else {
            return [
                'inn' => $query,
                'message' => 'Ошибка удаленного подключения',
                'authenticity' => false,
            ];
        }
    }




}