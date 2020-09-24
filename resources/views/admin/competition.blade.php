@extends('layouts.adminPanel')

@section('content')
<div class="container-fluid">

          <div class="row">
         
            <div class="col-md-12">
              <div class="card">
              
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List of Competitions</h4>
             
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
                        Project ID 
                        </th>
                        <th>
                        Competition Name
                        </th>
                        <th>
                        Commpetition Description
                        </th>
                        <th>
                        Registration Deadline
                        </th>
                        <th>
                        Submission Deadline
                        </th>
                       </tr>
                      </thead>
                      <tbody>
                      
                          @foreach ($competition as $competitions)
                          <tr>
                            <td>{{ $competitions->id }}</td>
                            <td>{{ $competitions->user_id }}</td>
                            <td>{{ $competitions->pro_id }}</td>
                            <td>{{ $competitions->competition_name }}</td>
                            <td>{{ $competitions->comptetion_des }}</td>
                            <td>{{ $competitions->reg_deadline }}</td>
                            <td>{{ $competitions->submission_deadline }}
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

