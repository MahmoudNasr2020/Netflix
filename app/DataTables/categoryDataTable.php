<?php

namespace App\DataTables;

use App\App\category;
use App\Model\Admin\Category as AdminCategory;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class categoryDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function($data){
                return '<div class="btn-group">
                        <button type="button" class="btn btn-primary">Action</button>
                        <button type="button" class="btn btn-primary dropdown-toggle m-r-20" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu" x-placement="top-start"
                            style="position: absolute; transform: translate3d(82px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <li>
                                <a href="#" class="edit_department" id='.$data->id. '>Edit</a>
                            </li>
                            <li>
                                <a href="#"  class="delete_department" id='. $data->id .'>Delete</a>
                            </li>
                        </ul>
                    </div>';
            })
            ->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(AdminCategory $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('category-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Blfrtip')
                    ->orderBy(0)
                    ->buttons(
                        Button::make(['extend' => 'export', 'text' => '<i class="fa fa-download"></i>']),
                        Button::make(['extend' => 'print', 'text' => '<i class="fa fa-print"></i>']),
                        Button::make(['extend'=>'reload']),
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::make('action'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'category_' . date('YmdHis');
    }
}
