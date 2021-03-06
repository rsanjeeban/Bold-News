@extends('layouts.app')

@section('content')

<div class="container">
	@isset($title)
		<div class="alert alert-dismissible alert-success">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>{{auth::user()->name}}..!</strong> You have to unlike <b>{{$title[0]['title']}}</b>
		</div>
	@endisset
	<div class="alert alert-dismissible alert-primary">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
			<h1>Dashboard : {{auth::user()->name}} </h1> 
			{{auth::user()->email}}
	</div>
    <div class="row">
        <div class="col-md-3">
        	<img src="/images/profile-pic.png" width="260">
            <h1>{{auth::user()->name}}</h1>

        </div>
        <div class="col-md-9 bg-white" style="border-top:1px solid blue">
        	<br>
        	<b><h1>Newses</h1></b>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">Channel</th>
			      <th scope="col">Headline</th>
			      <th scope="col">Published</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
				@foreach($data as $dat)
			    <tr>
			      <th scope="row">{{$dat['sourcename']}}</th>
			      <td>{{$dat['title']}}</td>
			      <td>{{$dat['publishedAt']}}</td>
			      <td>
			  		<a href="{{$dat['url']}}" target="_blank"><span class="badge badge-primary">View</span></a>
					<a href="{{route('UnlikeArticle',["ArticleId"=>$dat['id']])}}"><span class="badge badge-secondary">Unlike</span></a>
			      </td>
			    </tr>
				@endforeach
			  </tbody>
			</table> 
        </div>
    </div>
    
</div>
<br>
@include('layouts.footer')
@endsection
