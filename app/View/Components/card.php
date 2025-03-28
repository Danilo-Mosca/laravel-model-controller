<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    // Creo le variabili che passerò come parametri nella classe del componente card:
    public $title, $originalTitle, $nationality, $date, $vote;
    
    // Inizializzo le variabili tramite il costruttore così da passarglieli direttamente
    // nel tag <x-card> in questo modo:
    // <x-card 
    //        title="{{ nomeVariabile }}"
    //        originalTitle= "{{ nomeVariabile }}"
    //        nationality= "{{ nomeVariabile }}"
    //        date= "{{ nomeVariabile }}"
    //        vote= "{{ nomeVariabile }}"
    // />
    public function __construct($title, $originalTitle, $nationality, $date, $vote)
    {
        $this->title = $title;
        $this->originalTitle = $originalTitle;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->vote = $vote;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
