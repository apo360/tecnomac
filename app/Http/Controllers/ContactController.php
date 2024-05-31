<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Webklex\IMAP\Facades\Client;

class ContactController extends Controller
{
    public function enviarEmail(Request $request)
    {
        
        // Validação dos dados do formulário
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' => 'required',
        ]);

        // Envio do email
        $emailData = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject ?? 'No subject',
            'message' => $request->message,
        ];

        Mail::send('emails.email-contact', ['emailData' => $emailData], function($message) use ($emailData) {
            $message->to('info@techmactrade.com', 'Negócios')->subject($emailData['subject']);
            $message->from($emailData['email'], $emailData['name']);
        });

        // Redirecionamento após o envio do email
        return redirect()->back()->with('success', 'Your message has been sent successfully!')->with('emailData', $emailData);

    }

    public function listarEmails()
    {
        $client = Client::account('default');

        $client->connect();

        // Selecionar a caixa de entrada
        $inbox = $client->getFolder('INBOX');

        // Recuperar os e-mails da caixa de entrada
        $emails = $inbox->messages()->all()->get();

        // Desconectar do servidor IMAP
        $client->disconnect();
            // Carregue a visualização e passe os e-mails para ela
        return view('emails.list_email', compact('emails'));
    }
}

