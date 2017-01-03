<?php

namespace Aviator\Helpdesk\Models;

use Aviator\Helpdesk\Models\ActionBase;

class Assignment extends ActionBase
{
    public function assignee() {
        return $this->belongsTo(config('helpdesk.userModel'), 'assigned_to');
    }

    /**
     * Set the table name from the Helpdesk config
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('helpdesk.tables.assignments'));
    }
}