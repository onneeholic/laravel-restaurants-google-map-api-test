@extends('layouts.app')

@section('title', 'Restaurant in Bang Sue')

@section('content')



<div class="input-group mb-5">
    <input type="text" class="form-control keyword" placeholder="Search">
    <div class="input-group-append">
        <span class="input-group-text"><i class="icofont-search-2"></i></span>
    </div>
</div>

<div class="row gx-1 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-1 justify-content-center" id="showlist">

    <div class="col mb-5">
        <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Fancy Product</h5>
                    <!-- Product price-->
                    $40.00 - $80.00
                </div>
            </div>
            <!-- Product actions-->

        </div>
    </div>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Special Item</h5>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                    </div>
                    <!-- Product price-->
                    <span class="text-muted text-decoration-line-through">$20.00</span>
                    $18.00
                </div>
            </div>
            <!-- Product actions-->

        </div>
    </div>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Sale Item</h5>
                    <!-- Product price-->
                    <span class="text-muted text-decoration-line-through">$50.00</span>
                    $25.00
                </div>
            </div>
            <!-- Product actions-->

        </div>
    </div>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Popular Item</h5>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                    </div>
                    <!-- Product price-->
                    $40.00
                </div>
            </div>
            <!-- Product actions-->

        </div>
    </div>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Sale Item</h5>
                    <!-- Product price-->
                    <span class="text-muted text-decoration-line-through">$50.00</span>
                    $25.00
                </div>
            </div>
            <!-- Product actions-->

        </div>
    </div>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Fancy Product</h5>
                    <!-- Product price-->
                    $120.00 - $280.00
                </div>
            </div>
            <!-- Product actions-->

        </div>
    </div>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Special Item</h5>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                    </div>
                    <!-- Product price-->
                    <span class="text-muted text-decoration-line-through">$20.00</span>
                    $18.00
                </div>
            </div>
            <!-- Product actions-->

        </div>
    </div>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Popular Item</h5>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                    </div>
                    <!-- Product price-->
                    $40.00
                </div>
            </div>
            <!-- Product actions-->

        </div>
    </div>
</div>
@endsection

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function() {

    event.preventDefault();

    let data = $.ajax({
        type: 'GET',
        url: 'https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+bangsue+thailand&key=AIzaSyD6jJm-QT59t0YYlE5_qiwjfvQYLPfi1_k',
        async: false,
        dataType: "json",
        crossDomain: true,
        success: function(data) {
            return data;
        },
        error: function(xhr, type, exception) {
            // Do your thing
        }
    });

    let data_list = [];
    if (data.responseText != '') {
        let dl = JSON.parse(data.responseText);
        data_list = dl.results;
        showlist(data_list);
    }

    function showlist(data_list) {
        let showlist = ``;
        if (data_list.length > 0) {
            
            data_list.forEach(e => {
                let status = (e.business_status == "OPERATIONAL") ? `<div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Open
            </div>` : `<div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Close
            </div>`;
                // <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                //text-center
                showlist += `
            <div class="col mb-1">
        <div class="card h-100">
            <!-- Sale badge-->
            ${status}
            <!-- Product image-->
           
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="font-09rem">
                    <!-- Product name-->
                    <h5 class="fw-bolder"><strong>${e.name}</strong></h5>
                    <!-- Product price-->
                    <span class="text-muted text-decoration-line-through"><i class="icofont-google-map"></i></span>
                    <a href="https://www.google.com/maps/?q=${e.geometry.location.lat},${e.geometry.location.lng}" target="_blank">${e.formatted_address}</a>
                </div>
            </div>
            <!-- Product actions-->

        </div>
    </div>
            `;
            });
           
        }else{
            showlist = `<div class="col mb-1 text-center">Not Found</div>`;
        }
        $('#showlist').html(showlist);
    }

    $(document).on('keyup', '.keyword', function() {
        let keyword = $(this).val();
        console.log(keyword);
        let newarr = data_list.filter((item) => {
            return (keyword != "" ? item.name.toString().includes(keyword) :true) || (keyword != "" ? item.formatted_address.toString().includes(keyword) :true);
        });
        showlist(newarr);
    });


});
</script>