@extends('admin.admin')
@section('content')
    <head>
        <title>Dashboard</title>
    </head>
    <div class="container col-md-10">
            <div class="col-md-10">
                <h1>Welcome To Dashboard</h1>
            </div>

            <div class="updates"> 
                <div class="col-md-3">
                    <div class="boxDiv">
                        <br><h4>50</h4>
                        <h3>Registered Users</h3>
                    </div>    
                </div>

                <div class="col-md-3">
                    <div class="boxDiv1">
                        <br><h4>20</h4>
                        <h3>Daily Visitors</h3>
                    </div>    
                </div>

                <div class="col-md-3">
                    <div class="boxDiv1">
                        <br><h4>20</h4>
                        <h3>Daily Visitors</h3>
                    </div>    
                </div>
            </div>

            {{-- <div class="row">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                      70%
                    </div>
                </div>
            </div> --}}
        
        

 

        
        







{{--           
        <div class="chit-chat-layer1">
            <div class="col-md-6 chit-chat-layer1-left">
                       <div class="work-progres">
                                    <div class="chit-chat-heading">
                                          Recent Followers
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                          <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Project</th>
                                              <th>Manager</th>                                   
                                                                                
                                              <th>Status</th>
                                              <th>Progress</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>Face book</td>
                                          <td>Malorum</td>                                 
                                                                     
                                          <td><span class="label label-danger">in progress</span></td>
                                          <td><span class="badge badge-info">50%</span></td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Twitter</td>
                                          <td>Evan</td>                               
                                                                          
                                          <td><span class="label label-success">completed</span></td>
                                          <td><span class="badge badge-success">100%</span></td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>Google</td>
                                          <td>John</td>                                
                                          
                                          <td><span class="label label-warning">in progress</span></td>
                                          <td><span class="badge badge-warning">75%</span></td>
                                      </tr>
                                      <tr>
                                          <td>4</td>
                                          <td>LinkedIn</td>
                                          <td>Danial</td>                                 
                                                                     
                                          <td><span class="label label-info">in progress</span></td>
                                          <td><span class="badge badge-info">65%</span></td>
                                      </tr>
                                      <tr>
                                          <td>5</td>
                                          <td>Tumblr</td>
                                          <td>David</td>                                
                                                                         
                                          <td><span class="label label-warning">in progress</span></td>
                                          <td><span class="badge badge-danger">95%</span></td>
                                      </tr>
                                      <tr>
                                          <td>6</td>
                                          <td>Tesla</td>
                                          <td>Mickey</td>                                  
                                                                     
                                          <td><span class="label label-info">in progress</span></td>
                                          <td><span class="badge badge-success">95%</span></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                     </div>
              </div>
              <div class="col-md-6 chit-chat-layer1-rit">    	
                    <div class="geo-chart">
                            <section id="charts1" class="charts">
                        <div class="wrapper-flex">
                        
                            <table id="myTable" class="geoChart tableChart data-table col-table" style="display:none;">
                                <caption>Student Nationalities Table</caption>
                                <tr>
                                    <th scope="col" data-type="string">Country</th>
                                    <th scope="col" data-type="number">Number of Students</th>
                                    <th scope="col" data-role="annotation">Annotation</th>
                                </tr>
                                <tr>
                                    <td>China</td>
                                    <td align="right">20</td>
                                    <td align="right">20</td>
                                </tr>
                                <tr>
                                    <td>Colombia</td>
                                    <td align="right">5</td>
                                    <td align="right">5</td>
                                </tr>
                                <tr>
                                    <td>France</td>
                                    <td align="right">3</td>
                                    <td align="right">3</td>
                                </tr>
                                <tr>
                                    <td>Italy</td>
                                    <td align="right">1</td>
                                    <td align="right">1</td>
                                </tr>
                                <tr>
                                    <td>Japan</td>
                                    <td align="right">18</td>
                                    <td align="right">18</td>
                                </tr>
                                <tr>
                                    <td>Kazakhstan</td>
                                    <td align="right">1</td>
                                    <td align="right">1</td>
                                </tr>
                                <tr>
                                    <td>Mexico</td>
                                    <td align="right">1</td>
                                    <td align="right">1</td>
                                </tr>
                                <tr>
                                    <td>Poland</td>
                                    <td align="right">1</td>
                                    <td align="right">1</td>
                                </tr>
                                <tr>
                                    <td>Russia</td>
                                    <td align="right">11</td>
                                    <td align="right">11</td>
                                </tr>
                                <tr>
                                    <td>Spain</td>
                                    <td align="right">2</td>
                                    <td align="right">2</td>
                                </tr>
                                <tr>
                                    <td>Tanzania</td>
                                    <td align="right">1</td>
                                    <td align="right">1</td>
                                </tr>
                                <tr>
                                    <td>Turkey</td>
                                    <td align="right">2</td>
                                    <td align="right">2</td>
                                </tr>
                        
                            </table>
                        
                        </div><!-- .wrapper-flex -->
                        </section>				
                    </div>
              </div>
             <div class="clearfix"> </div>
        </div>

 --}}

    </div>
@endsection
