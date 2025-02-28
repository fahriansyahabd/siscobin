    <!doctype html>
        <html lang="en">
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                
                <!-- Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                
                <title>Hello, world!</title>
            </head>
            <body class="bg-gray-100 flex items-center justify-center h-screen"> 
                <section class="vh-100" style="background-color: #1d5cb9;">
                    <div class="container py-5 h-100">
                      <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                          <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                  
                              <h3 class="mb-5">Sign in</h3>
                              @if(session('error'))
                              <div class="bg-red-500 text-white p-2 my-2 rounded">#</div>
                          @endif
                          <form action="{{route('login')}}" method="POST" class="mt-4">
                              @csrf              
                              <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                                <label class="form-label" for="typeEmailX-2">Email</label>
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX-2">Password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                <label class="form-check-label" for="form1Example3"> Remember password </label>
                            </div>
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            <hr class="my-4">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>
            </body>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        </html>