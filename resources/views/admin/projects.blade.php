@extends('layouts.adminPanel')

@section('content')
<div class="container-fluid">

          <div class="row">
         
            <div class="col-md-12">
              <div class="card">
              
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List of Projects</h4>
             
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
                        Project Name
                        </th>
                        <th>
                        Description 
                        </th>
                        <th>
                        Project Completion Day
                        </th>
                        <th>
                        Project Completion Hour
                        </th>
                        <th>
                        Freelancer Level
                        </th>
                        <th>
                        Project Budget
                        </th>
                       </tr>
                      </thead>
                      <tbody>
                      
                          @foreach ($projects as $project)
                          <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->user_id }}</td>
                            <td>{{ $project->pro_name }}</td>
                            <td>{{ $project->Description }}</td>
                            <td>{{ $project->Project_comp_day }}</td>
                            <td>{{ $project->Project_comp_hour }}</td>
                            <td>{{ $project->Freelancer_level }}</td>
                            <td>{{ $project->Project_budget }}
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

