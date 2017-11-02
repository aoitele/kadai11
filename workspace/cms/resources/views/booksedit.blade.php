<!-- resources/views/booksedit.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
       
        <!-- 本更新フォーム -->
        <form action="{{ url('books/update') }}" method="POST">
         
            
            <!-- 本のタイトル -->
            <div class="form-group">
                <label for="item_name">タイトル</label>
                <input type="text" name="item_name" id="book-name"class="form-control" value="{{$book->item_name}}">
                    </div>
            
                    
                      <!-- 本の冊数 -->
            <div class="form-group">
                <label for="item_number">冊数</label>
                <input type="number" name="item_number" id="book-number"class="form-control" value="{{$book->item_number}}">
                    </div>
                    
                     <!-- 本の金額 -->
            <div class="form-group">
                <label for="item_amount">金額</label>
                <input type="text" name="item_amount" id="book-amount"class="form-control" value="{{$book->item_amount}}">
                    </div>
                
                      <!-- 本の公開日 -->
            <div class="form-group">
                <label for="published">公開日</label>
                <input type="date" name="published" id="book-published"class="form-control" value="{{$book->published}}">
                    </div>
                
                <!--Save Backボタン-->
                <div class="well well-sm">
                <button type="submit" class="btn btn-primary">保存</button>
                
                <a class="btn btn-link pull-right" href="{{url('/')}}">
                 <i class="glyphicon glyphicon-backward"></i>Back
                </a>
                </div>
                
                <!--id値を送信-->
                <input type="hidden" name="id" value="{{$book->id}}"/>
                
                <!--CSRF-->
                {{csrf_field()}}
                
                </form>
            </div>
                </div>
            @endsection