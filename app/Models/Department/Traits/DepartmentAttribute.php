<?php

namespace App\Models\Department\Traits;

/**
 * Class DepartmentAttribute.
 */
trait DepartmentAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/6.x/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">'.
        $this->getEditButtonAttribute('edit-blog', 'admin.blogs.edit').
        $this->getDeleteButtonAttribute('delete-blog', 'admin.blogs.destroy').
        '</div>';
    }
}
