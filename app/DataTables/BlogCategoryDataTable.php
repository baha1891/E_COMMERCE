<?php

namespace App\DataTables;

use App\Models\BlogCategory;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Facades\Lang;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class BlogCategoryDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'BlogCategory.dataTable.action')
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(BlogCategory $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('blogcategory-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax();
                }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [

            Column::make('id')->title(Lang::get('BlogCat_tr\index_tr.id')),
            Column::make('name_en')->data('name.en')->title(Lang::get('BlogCat_tr\index_tr.name_en')),
            Column::make('name_ar')->data('name.ar')->title(Lang::get('BlogCat_tr\index_tr.name_ar')),
            Column::computed('action')->title(Lang::get('BlogCat_tr\index_tr.action'))
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
        return 'BlogCategory_' . date('YmdHis');
    }
}
