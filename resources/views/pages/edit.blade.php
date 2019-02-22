@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <br><br>
            <form method="post"  action={{"/edit/".$data->id}}>
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="form-group">
                    <label for="exampleInputEmail1">اسم الشخص</label>
                    <input type="text" value="{{$data->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">المبلغ المدان به</label>
                    <input type="number" value="{{$data->money}}"  name="money" class="form-control" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">الواصل</label>
                    <input type="number" value="{{$data->arrived}}"  name="arrived" class="form-control" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">السلعة</label>
                    <input type="text" value="{{$data->product}}"  name="product" class="form-control" id="exampleInputPassword1" >
                </div>
                <button type="submit" class="btn btn-primary">حفظ</button>
            </form>
        </div>
    </div>
@endsection