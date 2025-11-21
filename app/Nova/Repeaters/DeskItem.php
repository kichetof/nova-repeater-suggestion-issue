<?php

namespace App\Nova\Repeaters;

use Laravel\Nova\Fields\Repeater\Repeatable;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class DeskItem extends Repeatable
{
    /**
     * Get the fields displayed by the repeatable.
     *
     * @return array<int, \Laravel\Nova\Fields\Field>
     */
    public function fields(NovaRequest $request): array
    {
        return [
            Text::make('Desk Name', 'name')
                ->suggestions(['Desk 1', 'Desk 2', 'Desk 3']),
        ];
    }
}
