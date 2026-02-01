<?php

namespace App\Observers;

use App\Models\Character;

class CharacterObserver
{
    /**
     * Handle the Character "created" event.
     */
    public function created(Character $character): void
    {
        $character->created_by = auth()->user()->id;
    }

    /**
     * Handle the Character "updated" event.
     */
    public function updated(Character $character): void
    {
        //
    }

    /**
     * Handle the Character "deleted" event.
     */
    public function deleted(Character $character): void
    {
        //
    }

    /**
     * Handle the Character "restored" event.
     */
    public function restored(Character $character): void
    {
        //
    }

    /**
     * Handle the Character "force deleted" event.
     */
    public function forceDeleted(Character $character): void
    {
        //
    }
}
