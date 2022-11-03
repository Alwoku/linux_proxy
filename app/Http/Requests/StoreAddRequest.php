<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Checking the data from the record addition form.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $date = date('Y-m-d H:i:s',strtotime("+15year") );
        return [
            'ip' => 'required|ipv4',
            'type' =>'required|exists:proxy_scan_log,type',
            'time' => 'required|numeric|gte:0',
            'created_at'=> 'date|before_or_equal:'.$date,
            'port'=> 'required|numeric|digits_between:1,65535',
            'checked_ma'=>'max:1000'
        ];
    }
    // Changing the messages being sent
    public function messages(){
        return[
            'ip.required'=>'Введите ip',
            'type.required'=>'Введите type',
            'type.exists'=>'Выбранный тип недопустим',
            'time.required'=>'Введите time',
            'created_at.before_or_equal'=>'Дата создания не должна превышать сегодняшнюю дату',
            'port.required'=>'Введите port',
            'ip.ipv4'=>'Неверный формат ip',
            'time.numeric'=>'Неверный формат time',
            'time.gte'=>'Неверный формат time',
            'port.numeric'=>'Неверный формат port',
            'port.digits_between'=>'Неверный формат port',

        ];
    }
}
