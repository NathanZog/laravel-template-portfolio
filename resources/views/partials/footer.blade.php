@foreach ($footer as $data)
    

<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">{{$data->titre1}}</h4>
                <p class="lead mb-0">
                    {{$data->adresse}}
                    <br />
                    {{$data->adresse2}}
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">{{$data->titre2}}</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">{{$data->titre3}}</h4>
                <p class="lead mb-0">
                    {{$data->txtF1}}
                    <a href="http://startbootstrap.com">{{$data->txtF2}}</a>
                    .
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>{{$data->txtF3}}</small></div>
</div>

@endforeach