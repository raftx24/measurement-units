<?php

namespace LaravelEnso\MeasurementUnits\app\Http\Controllers\Administration\MeasurementUnits;

use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;
use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\app\Forms\Builders\Administration\MeasurementUnitForm;

class Edit extends Controller
{
    public function __invoke(MeasurementUnit $measurementUnit, MeasurementUnitForm $form)
    {
        return ['form' => $form->edit($measurementUnit)];
    }
}
