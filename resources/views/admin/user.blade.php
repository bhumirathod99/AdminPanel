@extends('layouts.adminPanel')

@section('content')
<div class="container-fluid">

          <div class="row">
         
            <div class="col-md-12">
              <div class="card">
              
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List of Users</h4>
             
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
                        First Name
                        </th>
                        <th>
                        Last Name
                        </th>
                        <th>
                        Email 
                        </th>
                        <th>
                        Password
                        </th>
                        <th>
                        Mobile No.
                        </th>
                        <th>
                        Address
                        </th>
                        <th>
                        Image
                        </th>
                       </tr>
                      </thead>
                      <tbody>
                      
                          @foreach ($user as $users)
                          <tr>
                            <td>{{ $users->id }}</td>
                            <td>{{ $users->fname }}</td>
                            <td>{{ $users->lname }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->password }}</td>
                            <td>{{ $users->mobile_number }}</td>
                            <td>{{ $users->address }}</td>
                            <td>{{ $users->image }}
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

