<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>

<div class="container col main pt-5 mt-3">

    <h1>Rides</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="pull-right">
                        <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                            <i class="glyphicon glyphicon-filter"></i>
                        </span>
                    </div>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Drivers" />
                </div>
                <table class="table table-hover" id="dev-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Driver</th>
                            <th>Car number plate</th>
                            <th>Starting Point</th>
                            <th>Destination</th>
                            <th>Passengers</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Miguna Miguna</td>
                            <td>KCQ 222Q</td>
                            <td>Ruaka</td>
                            <td>Kimilili</td>
                            <td>4</td>
                            <td>25-05-2021</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm px-3">
                                    Upcoming
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Miguna Miguna</td>
                            <td>KCQ 222Q</td>
                            <td>Ruaka</td>
                            <td>Kimilili</td>
                            <td>4</td>
                            <td>25-05-2021</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm px-3">
                                    Completed
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Miguna Miguna</td>
                            <td>KCQ 222Q</td>
                            <td>Ruaka</td>
                            <td>Kimilili</td>
                            <td>4</td>
                            <td>25-05-2021</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm px-3">
                                    Completed
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Miguna Miguna</td>
                            <td>KCQ 222Q</td>
                            <td>Ruaka</td>
                            <td>Kimilili</td>
                            <td>4</td>
                            <td>25-05-2021</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm px-3">
                                    Completed
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Miguna Miguna</td>
                            <td>KCQ 222Q</td>
                            <td>Ruaka</td>
                            <td>Kimilili</td>
                            <td>4</td>
                            <td>25-05-2021</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm px-3">
                                    Completed
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>