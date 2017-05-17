@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <div class="list-group">
                    @foreach($websites as $website)
                      <div class="list-group-item">
                        <h4>
                          <p>
                            The below Articles came from this website:
                            <a href="{{$website->url}}">
                              {{$website->url}}
                            </a>
                          </p>
                          <p>
                            @foreach ($website->articles as $article)
                              <p>
                                {{$article->title}}
                              </p>
                              <br>
                            @endforeach
                          </p>
                        </h4>
                      </div>
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
