<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function check(Request $request): \Illuminate\Http\JsonResponse /*RedirectResponse*/
    {
        // Валидация данных формы
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|regex:/^\+375[0-9]{9}$/',
            'message' => 'required|string',
        ]);

        // Получение данных из формы
        $data = $request->all();

        // Отправка письма
        Mail::to('lemonka.mozg@gmail.com')->send(new ContactFormMail($data));
        return response()->json(['message' => 'Сообщение успешно отправлено!']);
    }
}
