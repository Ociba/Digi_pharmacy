<?php

namespace Modules\Farm\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plot extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected static function newFactory()
    {
        return \Modules\Farm\Database\factories\PlotFactory::new();
    }
    /**
     * This function creates plot information
     */
    public static function addPlot($location,$name_of_plot,$name_of_crop,$number_of_acres,$date_of_allocation){
        $plot_number = random_int(1000, 9999);
        Plot::create(array(
            'location'           => $location,
            'plot_number'        => $plot_number,
            'name_of_plot'       => $name_of_plot,
            'name_of_crop'       => $name_of_crop,
            'number_of_acres'    => $number_of_acres,
            'date_of_allocation' => $date_of_allocation,
            'harvest_status'     => 'pending',
            'created_by'         => auth()->user()->id
        ));
    }
    /**
     * This function gets all plots
     */
    public static function getPlots(){
        return Plot::paginate(10);
    }
    /**
     * This function gets edit form for category
    */
    public static function editPlotForm($plot_number){
        return Plot::wherePlotNumber($plot_number)->get();

    }
    /**
     * This function updates the  category
     */
    public static function updatePlot($plot_number,$location,$name_of_plot,$name_of_crop,$number_of_acres,$date_of_allocation){
        Plot::wherePlotNumber($plot_number)->update(array(
            'location' => $location,
            'name_of_plot' => $name_of_plot,
            'name_of_plot' => $name_of_plot,
            'name_of_crop' => $name_of_crop,
            'number_of_acres' => $number_of_acres,
            'number_of_acres' => $number_of_acres,
        ));
    }

    /**
     * this function deletes the category
     */
    public static function deletePlot($plot_number){
        Plot::wherePlotNumber($plot_number)->delete();
    }
}
