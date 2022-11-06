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
            'port'=> 'required|numeric|integer|min:1|max:65535',
            'description'=>'max:1000'
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
            'port.max'=>'Port не должен превышать 65535',
            'port.min'=>'Port должен быть не менее 1',
            'ip.ipv4'=>'Неверный формат ip',
            'time.numeric'=>'Неверный формат time',
            'time.gte'=>'Неверный формат time',
            'port.numeric'=>'Неверный формат port',
            'port.digits_between'=>'Неверный формат port',
            'description.max'=>'Длина текста не должна превышать 1000 символов'
        ];
    }
}
