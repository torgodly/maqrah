<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class ContactSection extends Component
{


    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        // Handle form submission (e.g., send email, save to database)
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        Session::flash('success', 'تم إرسال رسالتك. شكرًا لك!');

        // Clear form fields
        $this->reset();

        // Optionally redirect or refresh
        // return redirect()->back();
    }
    public function render()
    {
        return view('livewire.contact-section');
    }


}
