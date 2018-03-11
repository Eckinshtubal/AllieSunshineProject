<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 2018-03-07
 * Time: 9:36 AM
 */
?>
@extends('master')
@section('content')
    <head>
        <link href="{{asset('css/home.css')}}" rel="stylesheet">
    </head>
    <!-- Content here -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop