<?php

namespace App\DataTables;

use App\Models\Admin;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Facades\Lang;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class AdminDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {

        return (new EloquentDataTable($query))
            ->addColumn('action', 'Admin.dataTable.action')
            ->addColumn('status','Admin.dataTable.status')
            ->rawColumns(['status','action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Admin $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('admin-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')

                    ;
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')->title(Lang::get('Admin_tr\index_tr.id')),
            Column::make('first_name_en')->data('first_name.en')->title(trans('Admin_tr\index_tr.eng_first')),
            Column::make('first_name_ar')->data('first_name.ar')->title(Lang::get('Admin_tr\index_tr.ar_first')),
            Column::make('last_name_en')->data('last_name.en')->title(Lang::get('Admin_tr\index_tr.eng_last')),
            Column::make('last_name_ar')->data('last_name.ar')->title(Lang::get('Admin_tr\index_tr.ar_last')),
            Column::make('email')->title(Lang::get('Admin_tr\index_tr.email')),
            Column::make('phone')->title(Lang::get('Admin_tr\index_tr.phone')),
            Column::make('status')->title(Lang::get('Admin_tr\index_tr.status')),
            Column::computed('action')->title(Lang::get('Admin_tr\index_tr.action'))
                    ->exportable(false)
                    ->printable(false) 
                    ->width(60)
                    ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Admin_' . date('YmdHis');
    }
}
