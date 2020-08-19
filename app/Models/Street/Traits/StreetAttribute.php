<?php

namespace App\Models\Street\Traits;

/**
 * Class StreetAttribute.
 */
trait StreetAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/6.x/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn"> {$this->getEditButtonAttribute("edit-street", "admin.streets.edit")}
                {$this->getDeleteButtonAttribute("delete-street", "admin.streets.destroy")}
                </div>';
    }
}
