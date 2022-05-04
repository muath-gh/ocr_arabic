<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Upload</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form method="post" action="{{route('upload')}}"  enctype="multipart/form-data" class="form-horizontal" role="form">
                                    @csrf
                            <div style="margin-bottom: 25px" class="input-group">
                       <input type="file" name="image" />                                     
                                    </div>
                                
                          

                                
                          


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                     <input type="submit" class="btn btn-success">
                                

                                    </div>
                                </div>

                                
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                        <label>Result:</label>
                                
                                        @if(Session::has('text'))
                                       {{Session::get('text')}}
                                        @endif

                                    </div>
                                </div>

                                 
                            </form>     



                        </div>                     
                    </div>  
        </div>
  
    </div>
    