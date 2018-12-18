<?php

namespace App\DataTables;

use App\Requesting;
use App\User;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;

class HireDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('','');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Requesting $model)
    {
        $auth=Auth::guard('company')->user()->companyname;
        return $model->newQuery()->crossJoin('customers','customers.id','=','requestings.customer_id')
            ->select('customer_id', 'title','description','price','status','reason','days')
        ->where('companyname','=',$auth);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->addAction(['width' => '80px'])
            ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => ['excel','print', 'reload'],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'customer_id','title','description','price','status','reason','days'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Hire_' . date('YmdHis');
    }
}
