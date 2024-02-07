<?php

namespace App\Observers;

use App\Models\Observacao;
use Illuminate\Support\Facades\Auth;

class ObservacaoObserver
{
    /**
     * Handle the Observacao "created" event.
     */
    public function creating(Observacao $observacao): void
    {
        
         if (empty($observacao->usuario)) {
            $observacao->usuario = Auth::user()->id;
        }
    }

    /**
     * Handle the Observacao "updated" event.
     */
    public function updated(Observacao $observacao): void
    {
        
    }

    /**
     * Handle the Observacao "deleted" event.
     */
    public function deleted(Observacao $observacao): void
    {
        //
    }

    /**
     * Handle the Observacao "restored" event.
     */
    public function restored(Observacao $observacao): void
    {
        //
    }

    /**
     * Handle the Observacao "force deleted" event.
     */
    public function forceDeleted(Observacao $observacao): void
    {
        //
    }
}
