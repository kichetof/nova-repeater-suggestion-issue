<?php

namespace App\Nova\Repeaters;

use Laravel\Nova\Fields\Repeater\Repeatable;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class OfficeItem extends Repeatable
{
    /**
     * Get the fields displayed by the repeatable.
     *
     * @return array<int, \Laravel\Nova\Fields\Field>
     */
    public function fields(NovaRequest $request): array
    {
        return [
            Text::make('Office Name', 'name')
                ->suggestions(['Office 1', 'Office 2', 'Office 3']),
        ];
    }
}
