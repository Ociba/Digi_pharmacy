<?php

namespace Modules\Farm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Farm\Entities\Plot;

class PlotsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function getPlots()
    {
        return view('farm::plots',[
            'plots' =>Plot::getPlots()
        ]);
    }

    /**
     *This function creates plot.
     */
    public function createPlot(Request $request)
    {
        $validated = $request->validate([
            'location'           =>'required',
            'plot_number'        =>'unique:plots,plot_number',
            'name_of_plot'       =>'required',
            'name_of_crop'       =>'required',
            'number_of_acres'    =>'required',
            'date_of_allocation' =>'required',
            'harvest_status'     =>'',
        ]);

        Plot::addPlot(request()->location,request()->name_of_plot,request()->name_of_crop,request()->number_of_acres,request()->date_of_allocation);
        return redirect()->back()->with('msg','Operation Successful');
    }

    /**
     * This function gets edit form
     */
    public function getPlotEditForm(){
        return view('farm::edit_plot_form',[
            'edit_plot'=>Plot::editPlotForm(request()->plot_number)
        ]);
    }

    /**
     * This function updates Plot
     */
    public function updatePlotInformation(){
        Plot::updatePlot(request()->plot_number,request()->location,request()->name_of_plot,request()->name_of_crop,request()->number_of_acres,request()->date_of_allocation);
        return redirect('/farm/plots')->with('msg','Operation Successful');
    }
    /**
     * This function deletes Plot
     */
    public function delete(){
        Plot::deletePlot(request()->plot_number);
        return redirect()->back()->with('msg','Operation Successful');
    }
}
