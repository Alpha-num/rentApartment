@extends('layouts.template');

@section('content')
    <style>
        .title{
            font-weight: 600;
            text-transform: uppercase;
        }
    </style>
    <div class="container-fluid">
        <div class="container row mx-auto">
            <div class="col-md-8">
                <h5 class="title">About us</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor lacus eu sagittis luctus. Proin vel lectus nec est vulputate vulputate. Nullam nec dui id sapien bibendum tempor. Phasellus quis sem eu orci vestibulum iaculis. Fusce gravida, nisl a rhoncus facilisis, quam mi scelerisque augue, eu sollicitudin dui libero eu purus. Cras sit amet velit lacinia, bibendum metus vel, luctus purus. Sed id venenatis turpis, in vehicula nulla. Nullam laoreet, metus at gravida euismod, erat nunc auctor turpis, nec facilisis justo dolor eget nulla.
                        <br>
                </p>
                <p>
                Suspendisse consectetur, tortor in facilisis scelerisque, libero dolor rhoncus velit, nec ultricies dui nunc in turpis. <br> Pellentesque a purus id eros ultrices varius. In ac eros eu purus ultricies lacinia. Quisque aliquet quam eget eros vulputate, nec tristique arcu tincidunt. Nunc a quam a metus tincidunt pharetra. Vivamus sed tortor quam. Fusce malesuada varius vestibulum. Integer consequat euismod odio, nec interdum nisl varius a.
                </p>
            </div>
            <div class="col-md-4">
                <div class="w-90">
                    <img src="/images/undraw_Educator_re_ju47.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>


@endsection