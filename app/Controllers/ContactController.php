<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ContactController extends Controller
{
    public function testEnv()
    {
        echo 'SMTP Host: ' . getenv('mail.SMTPHost') . '<br>';
        echo 'SMTP User: ' . getenv('mail.SMTPUser') . '<br>';
        echo 'SMTP Pass: ' . getenv('mail.SMTPPass') . '<br>';
        echo 'SMTP Port: ' . getenv('mail.SMTPPort') . '<br>';
        echo 'SMTP Crypto: ' . getenv('mail.SMTPCrypto') . '<br>';
    }


    public function send()
    {
        helper(['form', 'url']);

        // Validasi input
        $rules = [
            'name'    => 'required',
            'email'   => 'required|valid_email',
            'subject' => 'required',
            'message' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Please fill all fields correctly.');
        }

        // Ambil data form
        $name    = $this->request->getPost('name');
        $email   = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        // Kirim email
        $emailService = \Config\Services::email();

        $emailService->setFrom(
            getenv('mail.fromEmail'),
            getenv('mail.fromName')
        );
        $emailService->setTo('juan.tanandi@nusamas.co.id');
        $emailService->setSubject($subject);
        $emailService->setMailType('html');
        $emailService->setMessage("
            <p>You received a new message from: <strong>$name</strong> &lt;$email&gt;</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
        ");

        if ($emailService->send()) {
            return redirect()->back()->with('success', 'Message sent successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to send message: ' . $emailService->printDebugger(['headers']));
        }
    }
}
