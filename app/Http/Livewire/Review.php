<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record, $subject, $review, $hotel_id;

    public function mount($id){
        $this->record = Hotel::findOrFail($id);
        $this->hotel_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput(){
        $this->subject = null;
        $this->review = null;
        $this->hotel_id = null;
        $this->IP = null;
    }

    public function store(){
        $this->validate([
           'subject' => 'required|min:5',
            'review' => 'required|min:10',
        ]);

        \App\Models\Review::create([
            'hotel_id' => $this->hotel_id,
            'user_id' => Auth::id(),
            'IP' => $_SERVER['REMOTE_ADDR'],
            'subject' => $this->subject,
            'review' => $this->review,
        ]);

        session()->flash('message', 'Review Send Successfully.');
        $this->resetInput();
    }


}
