<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @vite('resources/css/app.css')
    <body>
    <div id="app">
        <div class="container-fluid">
            <div class="row bg-dark">
                <div class="col lg-3">
                    <a href="{{ asset('/welcome') }}"><p class="text-center text-light display-4 pt-2" style="font-weight: bold; text-decoration: none;" > Adilo </p></a>
                </div>
                <div class="row text-center text-" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                    <div class="col md-3 text-left text-light pt-2 display-7" style="font-size: px;">
                        <p><a href="{{ asset('/projects') }}" style="text-decoration: none;">Projects</a></p>
                    </div>
                    <div class="col md-3 text-left text-light pt-2 display-7">
                        <p><a href="{{ asset('/tools') }}" style="text-decoration: none;">Tools & App</a> </p>
                    </div>
                    <div class="col md-3 text-left text-light pt-2 display-7" style="font-size: px;">
                        <p><a href="{{ asset('/help') }}" style="text-decoration: none;">Help</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-6">
                    <h3 class="text-info">My Recordings</h3>
                </div>

                <div class="col-lg-6">
                    <button type="button" class="btn btn-info float-right" data-bs-toggle="modal" data-bs-target="#myModal" @click="showAddModel=true">
                        <i class="fa fa-video-camera">&nbsp;&nbsp; Start Recording</i>
                    </button>
                </div>
            </div>
            <hr class="bg-info">


            <!-- Displaying resords -->
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center bg-info text-light">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Views</th>
                                <th>Size</th>
                                <th>Last Modified</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td><a href="#" class="text-info" style="text-decoration: none;">Feeling tired</a></td>
                                <td>324</td>
                                <td>158KB</td>
                                <td>about 2 months ago..</td>
                                <td><a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#myModalDelete" @click="showDeleteModel=true"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td><a href="#" class="text-info" style="text-decoration: none;">At my Aunt's place</a></td>
                                <td>311</td>
                                <td>98KB</td>
                                <td>about 2 months ago..</td>
                                <td><a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#myModalDelete" @click="showDeleteModel=true"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td><a href="#" class="text-info" style="text-decoration: none;">Going to the Museum</a></td>
                                <td>24</td>
                                <td>212KB</td>
                                <td>about 3 weeks ago..</td>
                                <td><a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#myModalDelete" @click="showDeleteModel=true"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr class="text-center">
                                <td>4</td>
                                <td><a href="#" class="text-info" style="text-decoration: none;">On a Tour</a></td>
                                <td>149</td>
                                <td>158KB</td>
                                <td>about 2 weeks ago..</td>
                                <td><a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#myModalDelete" @click="showDeleteModel=true"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr class="text-center">
                                <td>5</td>
                                <td><a href="#" class="text-info" style="text-decoration: none;">Precious and I having a nice time</a></td>
                                <td>400</td>
                                <td>198KB</td>
                                <td>about 2 last night </td>
                                <td><a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#myModalDelete" @click="showDeleteModel=true"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ADD NEW RECORD MODAL -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" v-if="showAddModel">
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Recording</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="showAddModel=false">

                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <p style="font-family: sans-serif;">Save the recording in</p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Select a project
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Record Screen</a></li>
                              <li><a class="dropdown-item" href="#">Record Camera</a></li>
                              <li><a class="dropdown-item" href="#">Record Mic</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="modal-footer">
                       <a href="{{ asset('/recording') }}"> <button type="button" class="btn btn-primary" @click="liveView=true" > Start</button></a>
                    </div>
                </div>
            </div>
        </div>

            <!-- DELETE RECORDING -->
        <div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true" v-if="showDeleteModel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Record</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="showDeleteModel=false">
                        <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <h4 class="text-danger">Are you sure you want to delete this user</h4>
                        <h5>You are deleting 'MY FIRST SHOT'</h5>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger btn-lg">Yes</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-success btn-lg" data-bs-dismiss="modal" aria-label="Close" @click="showDeleteModel=false">No</button>
                    </div>
                </div>
            </div>
        </div>



    </div>


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')
</body>
</html>
