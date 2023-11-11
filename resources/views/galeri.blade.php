@extends('template')

@section('content')
    <!-- Navbar & Hero Start -->

    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Galeri</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Projects Start -->
    <div class="container-xxl pt-5 pb-3">
        <div class="container pt-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Galeri Kami<span></span></p>
                <h1 class="text-center mb-5">Kegiatan Acara Terkini</h1>
            </div>
            <div class="row g-4 portfolio-container">
                @foreach ($data as $key)
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('storage/' . $key->gambar) }}" alt=""
                                    style="max-height:250px">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href=""
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row mt-4 portfolio-container">
                <div class="col-lg-4 col-md-6 offset-lg-4 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden text-center">
                            <a href="#" id="loadMoreButton"
                                class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Load
                                More</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Projects End -->
    @push('custom')
        <script>
            $(document).ready(function() {
                var offset = 0; // Keep track of the number of images loaded

                $('#loadMoreButton').on('click', function(e) {
                    e.preventDefault();

                    // Make an AJAX request to fetch more images
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('load.more.images') }}",
                        data: {
                            offset: offset
                        },
                        success: function(response) {
                            response.forEach(function(image) {
                                $('#imageContainer').append(
                                    '<div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s"><img class="img-fluid w-100" src="' +
                                    image.image_url +
                                    '" alt="New Image" style="max-height:250px"></div>');
                            });
                            offset += response.length;
                        },
                        error: function(error) {
                            console.log('Error fetching new images');
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
