@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open() !!}

                <div class="form-group">
                    {{ Form::label('title', 'Название') }}
                    {{ Form::text('title', null, ['class' =>'form-control', 'id' => 'name']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('content', 'Описание товара') }}
                    {{ Form::text('content', null, ['class' =>'form-control', 'id' => 'content']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('price', 'Описание товара') }}
                    {{ Form::text('price', null, ['class' =>'form-control', 'id' => 'price']) }}
                </div>

                {{ Form::button('создать продукт', ['class' => 'btn btn-primary', 'id' => 'button']) }}

                {!! Form::close() !!}
                <div id="msg"></div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#button').click(function () {
                var name = $('#name').val();
                var content = $('#content').val();
                var price = $('#price').val();
                $.ajax({
                    type: "POST",
                    url: 'sendmail',
                    data: {
                        name: name,
                        content: content,
                        price: price
                    },
                    success: function(data){
                        $('#msg').text(data.msg);
                    }
                })
            });
        });
    </script>
@endsection