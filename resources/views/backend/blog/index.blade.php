@extends('layouts.backend.main')
@section('title', 'MyBlog | blog/index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Dasbhboard <small>Display all blog posts</small></h1>
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body ">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td>Action</td>
                                    <td>Title</td>
                                    <td>Author</td>
                                    <td>category</td>
                                    <td>Date</td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
