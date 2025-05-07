<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;


class BookingManager extends Component
{
    public $propertyId;
    public $startDate;
    public $endDate;

    public function submit()
    {
        $this->validate([
            'propertyId' => 'required|exists:properties,id',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
        ]);
    
        Reservation::create([
            'user_id' => Auth::id(),
            'property_id' => $this->propertyId,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
        ]);
    
        session()->flash('message', 'Réservation enregistrée avec succès !');
        $this->reset(['propertyId', 'startDate', 'endDate']);
    }
    
    public function render()
    {
        return view('livewire.booking-manager');
    }
}
