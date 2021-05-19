@extends('layouts.viewdoc')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View Document</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    <div class="tab-pane" id="viewcontent">
                        <table class="table" width="100%">
                            <tr>
                                <td width="70%">
                      <embed src="{{URL::to('files/uploads/'.$docname)}}" type="application/pdf"   height="700px" width="100%">  
                                </td>
                                <td width="30%">
                                <form class="form-horizontal" method="POST" action="{{route('take_notes')}}">
                                      @csrf
                                      <div class="form-group row">
                                        <div class="col-sm-10">
                                        <input type="hidden" name="doc_id" value="{{$id}}">
                                        <input type="hidden" name="email" value="{{$email}}">
                                          <textarea class="form-control" id="notes" name="notes" required placeholder="Notes"></textarea>
                                      </div>
                                      </div>
                                    
                                      <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                          <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                      </div>
                                    </form>
                                  </br>
                                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Unified search.." title="Type in a name">
                                     
                                  <table id="myTable">
                                      
                                      <tr class="header">
                                        <th style="width:25%;">Notes</th>
                                      </tr>
                                      @foreach($notes as $key => $nott)
                                      <tr>
                                        <td>{{$nott->notes}} </td>
                                    </tr>
                                      @endforeach
                                    </table>
                                </td>
                            </tr>
                        </table>
                      </div>








                </div>
            </div>
        </div>
    </div>
</div>
@endsection
