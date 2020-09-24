@extends('layouts.adminPanel')

@section('content')
<div class="container-fluid">

          <div class="row">
         
            <div class="col-md-12">
              <div class="card">
              
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List of Freelancers</h4>
             
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    

                   
                    <table class="table">
                    <form method="POST" action="/freelancerCategories" class="form-control">
                    
                      <thead class=" text-primary">
                      <tr>
                        <th>
                        ID
                        </th>
                        <th>
                        User ID
                        </th>
                        <th>
                        Level
                        </th>
                       
                       </tr>
                      </thead>
                      <tbody>
                      
                          @foreach ($freelancers as $freelancer)
                          <tr>
                            <td>{{ $freelancer->id }}</td>
                            <td>{{ $freelancer->user_id }}</td>
                            <td>{{ $freelancer->level }}</td>
                            
                            </tr>  
                          @endforeach
                      
                        

                      </tbody>
                      </form>
                    </table>
                   
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection

@section('script')
    
@endsection

