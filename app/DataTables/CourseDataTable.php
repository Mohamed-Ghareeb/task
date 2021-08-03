<?php

namespace App\DataTables;

use App\Models\Course;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CourseDataTable extends DataTable
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
            ->editColumn('actions', 'admin.courses.actions.buttons')
            ->rawColumns(['actions']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Course $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Course $model)
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
                    ->parameters([
                        'dom' => 'lfBrtip',
                        'buttons' => [
                            [
                                'text' => 'create',
                                'className' => 'btn btn-link btn-sm btn-create ml-1',
                            ],
                            [
                                'text' => 'Trashed',
                                'className' => 'btn btn-link btn-sm btn-trashed ml-1',
                            ],
                        ]
                    ])
                    ->setTableId('coursedatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('id'),
            Column::make('name')->title('Name'),
            Column::make('views')->title('Views'),
            Column::make('level')->title('Level'),
            Column::make('hours')->title('Hours'),
            Column::make('active')->title('Active'),
            Column::computed('actions')->orderable(false)
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Courses_' . date('YmdHis');
    }
}
