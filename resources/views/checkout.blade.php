@extends('index')

@section('content')

    <section for="cheakout" class="bg-light">
        <div class="container-fluid max-site-width">
            <div class="py-2 pt-4 mx-4">
                <div class="row">
                    <div class="col-7">
                        <label for="cheakInfo" class="h5">Cheak Information</label>
                        <div class="bg bg-white rounded p-4 mt-2">
                            <div class="row">
                                <div class="col-8 form-group">
                                    <select class="form-control" id="qty">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                                <div class="col-4 ">
                                    <a href="{{ url('add-new-address') }}" class="btn btn-warning col"
                                        style="bottom: 0px;"> Qty</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mx-3 p-4 bg bg-light rounded d-block w-100">
                                    @isset($data[0])
                                        <span>
                                            {{ $data[0]->xname }}, <i class="fa fa-map-marker ml-2">
                                            </i>{{ $data[0]->xvenu }}<br>
                                        </span>
                                    @endisset
                                    <span>
                                        <i class="fas fa-user"></i> {{ session('xname') }},
                                        {{ session('xmobile') }},{{ session('xemail') }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="mx-3">
                                    <li>Delivery of the products will be completed within approximately 30 working days
                                        after
                                        payment.
                                    </li>
                                    <li>Delivery charge (40tk) will be added for orders from Unimart, Meenaclick,Khaas
                                        food,Khaleque&sons,Little
                                        india,Shwapno,Daily Bazar,Suha,Angelic,Shorong and Bengal Meat Express shops
                                    </li>
                                    <li>For mobile express order, Delivery will be made within 2 hours</li>
                                    <li>Price included VAT for VAT applicable products</li>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mx-3 mt-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            I agree to the
                                            <span class="text-warning font-weight-bold">Terms & Conditions</span>
                                            and
                                            <span class="text-warning font-weight-bold">Purchasing Policy</span>
                                            of VShop</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <a href="{{ url('/') }}" class="btn btn-block btn-outline-secondary col">
                                        <i class="fas fa-arrow-left"> </i>
                                        <span class="ml-3">GO BACK</span>
                                    </a>
                                </div>
                                <div class="col-6">
                                    {{-- <a href="#" id="confirm" class="btn btn-warning col ">Confirm Order</a> --}}
                                    <form id="order-submit" class="form" action="../confirm-order" method="post">
                                        @csrf
                                        <input type="hidden" name="xqty" id="xqty">
                                        <input type="hidden" name="xcode" id="xcode" value="{{$data[0]->xcode}}">
                                        <input type="submit" id="confirm" class="btn btn-warning col "
                                            value="Confirm Order">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- order summery --}}
                    <div class="col-5">
                        <label for="cheakInfo" class="h5">Order Summary</label>
                        <div class="bg bg-warning rounded p-3 mt-2">
                            <div class="row h5 m-auto">
                                <div class="col-6 text-left">
                                    Total
                                </div>
                                <div class="col-6 text-right">
                                    @isset($data[0])
                                        <span>৳</span><span class="totCost"> {{ $data[0]->xcost }}</span>
                                    @endisset
                                </div>
                            </div>
                        </div>
                        <div class="bg bg-white rounded  mt-2">
                            @isset($data[0])
                                @php
                                    $img = 'images/events/image1/' . $data[0]->xcode . '.jpg'; 
                                    $xname=substr($data[0]->xname, 0,32);
                                @endphp
                                <div class="row pb-2 border-bottom border-warning font-weight-bold m-auto">
                                    <div class="col-8">
                                        <span>{{$data[0]->xtype}}</span>
                                    </div>                                     
                                </div>
                                <div class="row border-bottom p-2 m-auto">
                                    <div class="col-3 text-left">
                                        <img src="{{ asset($img) }}" class="lazy img-fluid ">
                                    </div>
                                    <div class="col-9">
                                        <li class="list-unstyled text-right">
                                            <span>{{$xname}}</span>
                                        </li>
                                    </div>
                                    <div class="col-8 text-right ">
                                        <span>৳</span><span class="subCost"> {{ $data[0]->xcost }}</span> X <span class="subQty"> 1</span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span>৳</span><span class="totCost"> {{ $data[0]->xcost }}</span>
                                    </div>
                                </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            //for confirm order, checkbox is clicked or not
            var isCheck = true;
            $("#confirm").prop('disabled', true);
            $("#exampleCheck1").click(function() {
                if (isCheck == false) {
                    // disabled
                    $("#confirm").prop('disabled', true);
                    isCheck = true;
                } else {
                    $("#confirm").prop('disabled', false);
                    isCheck = false;
                }
            });

            //get qty for submit
            var qty = $("#qty").val();
            $("#xqty").val(qty);
            $("#qty").change(function() {
                qty = $("#qty").val();
                $("#xqty").val(qty);

                //order summery
                var subCost=$('.subCost').html();
                var totCost=subCost*qty;
                $(".subQty").html(qty);
                $(".totCost").html(totCost);

            });
        });
    </script>
@endsection
