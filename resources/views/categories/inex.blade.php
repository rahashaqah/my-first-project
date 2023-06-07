@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{asset('css/category.css')}}">
</head>
    <div class=" card m-4 w-80">
        <div class=" card card-hedder m-2 ">
            <h3 class="text-dark p-3 justify-between-center"><b>Catigoris table</b></h3>
            <div class="row m-4 w-80" >
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class=" card-body ">
            <div class="row col-auto">
                <a href="#" class="btn btn-success btn-lg btn-block mx-5 w-75 my-3" data-bs-toggle="modal"
                    data-bs-target="#exampleModalLong">
                    إضافه كتاب جديد + </a>
            </div>
            <div class="row">
                <table class="table table-dark border-right table-hover mx-5 w-75 table-responsive ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">اسم الكتاب</th>
                            <th scope="col">نوع الكتاب </th>
                            <th scope="col">تعديلات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                            ?>
                        @foreach ($categories as $item )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td><a href="" class="btn btn-outline-success mx-1" data-bs-toggle="modal"
                                data-bs-target="#Edit-Modal-{{$item->id}}"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                            </td>
                            @include('categories.editModel')
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">add new catigory</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('Category.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <lable class="form-lable">Catigory Name</lable>
                                <input type="text" class="form-control" name="CatName">
                            </div>
                            <div class="col-6">
                                <lable class="form-lable">Catigory description</lable>
                                <textarea name="CatDesc" id="" cols="30" class="form-control"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-clos" aria-label="Cloes"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
