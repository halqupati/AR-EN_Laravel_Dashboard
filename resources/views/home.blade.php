@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default"> 
            
                <div class="panel-heading"> 
                   
                </div>

                <div class="panel-body">
                    @lang('quickadmin.qa_dashboard_text')
                </div>
            </div>
       </div>
        @foreach($articles as $artical)
       <div class="col-md-2">
            <div class="panel panel-default"> 

            <h4 style="text-align: center">
             @lang('quickadmin.qa_articals')
         </h4>
                <div class="panel-heading" style="text-align: center"> 
                   
                    {{ $artical->title }}
                  
                </div>
                <div class="panel-heading" style="text-align: center;height: 200px"> 

                    {{ $artical->description }}
               
                </div>
            </div>
        </div>
          @endforeach
    </div>
@endsection
